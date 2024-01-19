<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Conference_System;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananConferenceSystemController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananconferencesystemes = Pemeliharaan_Bulanan_Conference_System::latest()->paginate(5);
        return view('pemeliharaanBulananConferenceSystem.index', compact('pemeliharaanbulananconferencesystemes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananConferenceSystem.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit' => 'required',
            'bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Conference_System::create($request->all());
        return redirect()->route('pemeliharaanBulananConferenceSystem.index')
            ->with('success', 'pemeliharaanBulananConferenceSystem created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Conference_System::all();

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
            'bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit' => 'required',
            'bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel' => 'required',
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
        

        $pemeliharaanbulananconferencesystem = Pemeliharaan_Bulanan_Conference_System::create($data);
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
        $pemeliharaanbulananconferencesystem = Pemeliharaan_Bulanan_Conference_System::where('id', '=', $id)->first();
        return view('pemeliharaanBulananConferenceSystem.edit', compact('pemeliharaanbulananconferencesystem'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit' => 'required',
            'bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Conference_System::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit' => $request->bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit,
            'bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel' =>  $request->bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananConferenceSystem.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit' => 'required',
            'bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel' => 'required',
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
            
            Pemeliharaan_Bulanan_Conference_System::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Conference_System::where('id','=',$id)->delete();
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
