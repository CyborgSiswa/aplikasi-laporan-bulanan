<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Fire_Detection_Alarm_System;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananFireDetectionAlarmSystemController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananfiredetectionalarmsystemes = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::latest()->paginate(5);
        return view('pemeliharaanBulananFireDetectionAlarmSystem.index', compact('pemeliharaanbulananfiredetectionalarmsystemes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananFireDetectionAlarmSystem.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_jaringan' => 'required',
            'pengetesan_fungsi_dan_monitoring_pk' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::create($request->all());
        return redirect()->route('pemeliharaanBulananFireDetectionAlarmSystem.index')
            ->with('success', 'pemeliharaanBulananFireDetectionAlarmSystem created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::all();

        if($data){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'not found',
                'data' => $data
            ]);
        }
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_jaringan' => 'required',
            'pengetesan_fungsi_dan_monitoring_pk' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required'
          
        ]);

        $data = $request->all();
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
        

        $pemeliharaanbulananfiredetectionalarmsystem = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::create($data);
        if($data){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'failure',
                'data' => $data
            ]);
        }
    }
    public function edit($id)
    {
        $pemeliharaanbulananfiredetectionalarmsystem = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::where('id', '=', $id)->first();
        return view('pemeliharaanBulananFireDetectionAlarmSystem.edit', compact('pemeliharaanbulananfiredetectionalarmsystem'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_jaringan' => 'required',
            'pengetesan_fungsi_dan_monitoring_pk' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_jaringan' => $request->pemeriksaan_jaringan,
            'pengetesan_fungsi_dan_monitoring_pk' =>  $request->pengetesan_fungsi_dan_monitoring_pk,
            'pengujian_kinerja_secara_berkala' =>  $request->pengujian_kinerja_secara_berkala,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananFireDetectionAlarmSystem.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_jaringan' => 'required',
                'pengetesan_fungsi_dan_monitoring_pk' => 'required',
                'pengujian_kinerja_secara_berkala' => 'required',
                
                'keterangan' => 'required',
                'id_personil' => 'required',
                'id_pengawas' => 'required'
            ]);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()
                ],400);
            }
            $data = $request->all();
            
            Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::where('id','=',$id)->update($data);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'failed',
                'data' => $e
            ]);
        }
    }
    public function destroy($id)
    {
        try {
           $del = Pemeliharaan_Bulanan_Fire_Detection_Alarm_System::where('id','=',$id)->delete();
           if($del){
               return response()->json([
                   'message' => 'success'
               ],200);
            }else{
            return response()->json([
                'message' => 'failed destroy data'
            ],400);
           }

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'failed query'
            ],500);
        }
    }
}
