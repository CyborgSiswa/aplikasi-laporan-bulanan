<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Conference_System;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianConferenceSystemController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianconferencesystemes = Pemeliharaan_Harian_Conference_System::latest()->paginate(5);
        return view('pemeliharaanHarianConferenceSystem.index', compact('pemeliharaanharianconferencesystemes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianConferenceSystem.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'periksa_kondisi_fisik_microphone_dan_amplifier' => 'required',
            'test_output_dari_microphone' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Conference_System::create($request->all());
        return redirect()->route('pemeliharaanHarianConferenceSystem.index')
            ->with('success', 'pemeliharaanHarianConferenceSystem created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Conference_System::all();

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
            'periksa_kondisi_fisik_microphone_dan_amplifier' => 'required',
            'test_output_dari_microphone' => 'required',
    
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
        

        $pemeliharaanharianconferencesystem= Pemeliharaan_Harian_Conference_System::create($data);
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
        $pemeliharaanharianconferencesystem = Pemeliharaan_Harian_Conference_System::where('id', '=', $id)->first();
        return view('pemeliharaanHarianConferenceSystem.edit', compact('pemeliharaanharianconferencesystem'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'periksa_kondisi_fisik_microphone_dan_amplifier' => 'required',
            'test_output_dari_microphone' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Harian_Conference_System::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'periksa_kondisi_fisik_microphone_dan_amplifier' => $request->periksa_kondisi_fisik_microphone_dan_amplifier,
            'test_output_dari_microphone' =>  $request->test_output_dari_microphone,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianConferenceSystem.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'periksa_kondisi_fisik_microphone_dan_amplifier' => 'required',
                'test_output_dari_microphone' => 'required',
        
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
            
            Pemeliharaan_Harian_Conference_System::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Conference_System::where('id','=',$id)->delete();
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
