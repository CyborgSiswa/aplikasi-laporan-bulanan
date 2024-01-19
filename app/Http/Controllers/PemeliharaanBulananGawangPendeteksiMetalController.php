<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananGawangPendeteksiMetalController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulanangawangpendeteksimetales = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::latest()->paginate(5);
        return view('pemeliharaanBulananGawangPendeteksiMetal.index', compact('pemeliharaanbulanangawangpendeteksimetales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananGawangPendeteksiMetal.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_interferensi_mekanikal' => 'required',
            'pemeriksaan_interferensi_elektrikal' => 'required',
            'pemeriksaan_tingkat_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_otp' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::create($request->all());
        return redirect()->route('pemeliharaanBulananGawangPendeteksiMetal.index')
            ->with('success', 'pemeliharaanBulananGawangPendeteksiMetal created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::all();

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
            'pemeriksaan_interferensi_mekanikal' => 'required',
            'pemeriksaan_interferensi_elektrikal' => 'required',
            'pemeriksaan_tingkat_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_otp' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            
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
        

        $pemeliharaanbulanangawangpendeteksimetal = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::create($data);
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
        $pemeliharaanbulanangawangpendeteksimetal = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::where('id', '=', $id)->first();
        return view('pemeliharaanBulananGawangPendeteksiMetal.edit', compact('pemeliharaanbulanangawangpendeteksimetal'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_interferensi_mekanikal' => 'required',
            'pemeriksaan_interferensi_elektrikal' => 'required',
            'pemeriksaan_tingkat_sensitivitas' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_otp' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_interferensi_mekanikal' => $request->pemeriksaan_interferensi_mekanikal,
            'pemeriksaan_interferensi_elektrikal' =>  $request->pemeriksaan_interferensi_elektrikal,
            'pemeriksaan_tingkat_sensitivitas' =>  $request->pemeriksaan_tingkat_sensitivitas,
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_otp' => $request->pengujian_kinerja_secara_berkala_dengan_menggunakan_otp,
            'pemeriksaan_ups_automatic_change_over_facility' =>  $request->pemeriksaan_ups_automatic_change_over_facility,
            'pemeriksaan_ups_expected_back_up_time' =>  $request->pemeriksaan_ups_expected_back_up_time,
            'pemeriksaan_ups_fan' =>  $request->pemeriksaan_ups_fan,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananGawangPendeteksiMetal.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_interferensi_mekanikal' => 'required',
                'pemeriksaan_interferensi_elektrikal' => 'required',
                'pemeriksaan_tingkat_sensitivitas' => 'required',
                'pengujian_kinerja_secara_berkala_dengan_menggunakan_otp' => 'required',
                'pemeriksaan_ups_automatic_change_over_facility' => 'required',
                'pemeriksaan_ups_expected_back_up_time' => 'required',
                'pemeriksaan_ups_fan' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal::where('id','=',$id)->delete();
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



