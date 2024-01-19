<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanPendeteksiMetalGenggamController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguanpendeteksimetalgenggames =Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::latest()->paginate(5);
        return view('pemeliharaanMingguanPendeteksiMetalGenggam.index', compact('pemeliharaanmingguanpendeteksimetalgenggames'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanPendeteksiMetalGenggam.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_switch_atau_tombol_on_off' => 'required',
            'pemeriksaan_alert_system_audible' => 'required',
            'pemeriksaan_alert_system_visible' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::create($request->all());
        return redirect()->route('pemeliharaanMingguanPendeteksiMetalGenggam.index')
            ->with('success', 'pemeliharaanMingguanPendeteksiMetalGenggam created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::all();

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
            'pemeriksaan_fungsi_switch_atau_tombol_on_off' => 'required',
            'pemeriksaan_alert_system_audible' => 'required',
            'pemeriksaan_alert_system_visible' => 'required',
            
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
        

        $pemeliharaanmingguanpendeteksimetalgenggam = Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::create($data);
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
        $pemeliharaanmingguanpendeteksimetalgenggam =Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanPendeteksiMetalGenggam.edit', compact('pemeliharaanmingguanpendeteksimetalgenggam'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_switch_atau_tombol_on_off' => 'required',
            'pemeriksaan_alert_system_audible' => 'required',
            'pemeriksaan_alert_system_visible' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_fungsi_switch_atau_tombol_on_off' => $request->pemeriksaan_fungsi_switch_atau_tombol_on_off,
            'pemeriksaan_alert_system_audible' => $request->pemeriksaan_alert_system_audible,
            'pemeriksaan_alert_system_visible' =>$request->pemeriksaan_alert_system_visible,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanPendeteksiMetalGenggam.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_fungsi_switch_atau_tombol_on_off' => 'required',
                'pemeriksaan_alert_system_audible' => 'required',
                'pemeriksaan_alert_system_visible' => 'required',
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
            
            Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::where('id','=',$id)->update($data);
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
           $del =  Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam::where('id','=',$id)->delete();
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

