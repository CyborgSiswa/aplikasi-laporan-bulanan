<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanSistemKameraPemantauController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguansistemkamerapemantaues =Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::latest()->paginate(5);
        return view('pemeliharaanMingguanSistemKameraPemantau.index', compact('pemeliharaanmingguansistemkamerapemantaues'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanSistemKameraPemantau.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_auto_recording' => 'required',
            'pemeriksaan_fungsi_manual_recording' => 'required',
            'pemeriksaan_fungsi_pengendali_pan_tilt_zoom' => 'required',
            'pemeriksaan_fungsi_pengendali_multiscreen_display' => 'required',
            'pemeriksaan_fungsi_pengendali_monitor_selector_area' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::create($request->all());
        return redirect()->route('pemeliharaanMingguanSistemKameraPemantau.index')
            ->with('success', 'pemeliharaanMingguanSistemKameraPemantau created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::all();

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
            'pemeriksaan_fungsi_auto_recording' => 'required',
            'pemeriksaan_fungsi_manual_recording' => 'required',
            'pemeriksaan_fungsi_pengendali_pan_tilt_zoom' => 'required',
            'pemeriksaan_fungsi_pengendali_multiscreen_display' => 'required',
            'pemeriksaan_fungsi_pengendali_monitor_selector_area' => 'required',
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
        

        $pemeliharaanmingguansistemkamerapemantau = Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::create($data);
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
        $pemeliharaanmingguansistemkamerapemantau =Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanSistemKameraPemantau.edit', compact('pemeliharaanmingguansistemkamerapemantau'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_auto_recording' => 'required',
            'pemeriksaan_fungsi_manual_recording' => 'required',
            'pemeriksaan_fungsi_pengendali_pan_tilt_zoom' => 'required',
            'pemeriksaan_fungsi_pengendali_multiscreen_display' => 'required',
            'pemeriksaan_fungsi_pengendali_monitor_selector_area' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_fungsi_auto_recording' =>$request->pemeriksaan_fungsi_auto_recording,
            'pemeriksaan_fungsi_manual_recording' => $request->pemeriksaan_fungsi_manual_recording,
            'pemeriksaan_fungsi_pengendali_pan_tilt_zoom' => $request->pemeriksaan_fungsi_pengendali_pan_tilt_zoom,
            'pemeriksaan_fungsi_pengendali_multiscreen_display' => $request->pemeriksaan_fungsi_pengendali_multiscreen_display,
            'pemeriksaan_fungsi_pengendali_monitor_selector_area' => $request->pemeriksaan_fungsi_pengendali_monitor_selector_area,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanSistemKameraPemantau.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_fungsi_auto_recording' => 'required',
                'pemeriksaan_fungsi_manual_recording' => 'required',
                'pemeriksaan_fungsi_pengendali_pan_tilt_zoom' => 'required',
                'pemeriksaan_fungsi_pengendali_multiscreen_display' => 'required',
                'pemeriksaan_fungsi_pengendali_monitor_selector_area' => 'required',
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
            
            Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::where('id','=',$id)->update($data);
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
           $del =  Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau::where('id','=',$id)->delete();
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


