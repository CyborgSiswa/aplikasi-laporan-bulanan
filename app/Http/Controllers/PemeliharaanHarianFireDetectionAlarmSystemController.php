<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Fire_Detection_Alarm_System;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianFireDetectionAlarmSystemController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianfiredetectionalarmsystemes = Pemeliharaan_Harian_Fire_Detection_Alarm_System::latest()->paginate(5);
        return view('pemeliharaanHarianFireDetectionAlarmSystem.index', compact('pemeliharaanharianfiredetectionalarmsystemes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianFireDetectionAlarmSystem.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_ups' => 'required',
            'pembersihan_lokasi_sekitar_mcfa' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan' => 'required',
            'visual_check_tampilan_layar_control_panel' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Fire_Detection_Alarm_System::create($request->all());
        return redirect()->route('pemeliharaanHarianFireDetectionAlarmSystem.index')
            ->with('success', 'pemeliharaanHarianFireDetectionAlarmSystem created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Fire_Detection_Alarm_System::all();

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
            'pembersihan_ups' => 'required',
            'pembersihan_lokasi_sekitar_mcfa' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan' => 'required',
            'visual_check_tampilan_layar_control_panel' => 'required',
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
        

        $pemeliharaanharianfiredetectionalarmsystem = Pemeliharaan_Harian_Fire_Detection_Alarm_System::create($data);
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
        $pemeliharaanharianfiredetectionalarmsystem = Pemeliharaan_Harian_Fire_Detection_Alarm_System::where('id', '=', $id)->first();
        return view('pemeliharaanHarianFireDetectionAlarmSystem.edit', compact('pemeliharaanharianfiredetectionalarmsystem'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_ups' => 'required',
            'pembersihan_lokasi_sekitar_mcfa' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan' => 'required',
            'visual_check_tampilan_layar_control_panel' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data =  Pemeliharaan_Harian_Fire_Detection_Alarm_System::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_ups' =>   $request->pembersihan_ups,
            'pembersihan_lokasi_sekitar_mcfa' =>  $request->pembersihan_lokasi_sekitar_mcfa,
            'periksa_suhu_dan_kelembaban_ruangan_peralatan' =>   $request->periksa_suhu_dan_kelembaban_ruangan_peralatan,
            'visual_check_tampilan_layar_control_panel' =>   $request->visual_check_tampilan_layar_control_panel,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianFireDetectionAlarmSystem.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_ups' => 'required',
                'pembersihan_lokasi_sekitar_mcfa' => 'required',
                'periksa_suhu_dan_kelembaban_ruangan_peralatan' => 'required',
                'visual_check_tampilan_layar_control_panel' => 'required',
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
            
            Pemeliharaan_Harian_Fire_Detection_Alarm_System::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Fire_Detection_Alarm_System::where('id','=',$id)->delete();
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
