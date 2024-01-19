<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Fire_Detection_Alarm_System;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanFireDetectionAlarmSystemController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguanfiredetectionalarmsystemes = Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::latest()->paginate(5);
        return view('pemeliharaanMingguanFireDetectionAlarmSystem.index', compact('pemeliharaanmingguanfiredetectionalarmsystemes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanFireDetectionAlarmSystem.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::create($request->all());
        return redirect()->route('pemeliharaanMingguanFireDetectionAlarmSystem.index')
            ->with('success', 'pemeliharaanMingguanFireDetectionAlarmSystems created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::all();

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
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa' => 'required',
            
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
        

        $pemeliharaanmingguanfiredetectionalarmsystem = Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::create($data);
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
        $pemeliharaanmingguanfiredetectionalarmsystem =Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanFireDetectionAlarmSystem.edit', compact('pemeliharaanmingguanfiredetectionalarmsystem'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_main_supply_voltage' =>  $request->pemeriksaan_main_supply_voltage,
            'pemeriksaan_output_voltage_ups' =>  $request->pemeriksaan_output_voltage_ups,
            'pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa' =>  $request->pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanFireDetectionAlarmSystem.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_main_supply_voltage' => 'required',
                'pemeriksaan_output_voltage_ups' => 'required',
                'pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa' => 'required',
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
            
            Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Mingguan_Fire_Detection_Alarm_System::where('id','=',$id)->delete();
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
