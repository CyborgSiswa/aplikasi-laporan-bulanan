<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananPendeteksiMetalGenggamController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananpendeteksimetalgenggames = Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::latest()->paginate(5);
        return view('pemeliharaanBulananPendeteksiMetalGenggam.index', compact('pemeliharaanbulananpendeteksimetalgenggames'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananPendeteksiMetalGenggam.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pengujian_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_otp' => 'required',
            'pemeriksaan_peralatan_dari_kerusakan_fisik' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::create($request->all());
        return redirect()->route('pemeliharaanBulananPendeteksiMetalGenggam.index')
            ->with('success', 'pemeliharaanBulananPendeteksiMetalGenggam created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::all();

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
            'pengujian_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_otp' => 'required',
            'pemeriksaan_peralatan_dari_kerusakan_fisik' => 'required',
            
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
        

        $pemeliharaanbulananpendeteksimetalgenggam = Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::create($data);
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
        $pemeliharaanbulananpendeteksimetalgenggam = Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::where('id', '=', $id)->first();
        return view('pemeliharaanBulananPendeteksiMetalGenggam.edit', compact('pemeliharaanbulananpendeteksimetalgenggam'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pengujian_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_otp' => 'required',
            'pemeriksaan_peralatan_dari_kerusakan_fisik' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pengujian_sensitivitas' => $request->pengujian_sensitivitas,
            'pengujian_kinerja_secara_berkala_dengan_otp' =>  $request->pengujian_kinerja_secara_berkala_dengan_otp,
            'pemeriksaan_peralatan_dari_kerusakan_fisik' => $request->pemeriksaan_peralatan_dari_kerusakan_fisik,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananPendeteksiMetalGenggam.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pengujian_sensitivitas' => 'required',
                'pengujian_kinerja_secara_berkala_dengan_otp' => 'required',
                'pemeriksaan_peralatan_dari_kerusakan_fisik' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::where('id','=',$id)->update($data);
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
           $del =Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam::where('id','=',$id)->delete();
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


