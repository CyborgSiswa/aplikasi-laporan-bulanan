<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Igcs;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananIgcsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananigcses = Pemeliharaan_Bulanan_Igcs::latest()->paginate(5);
        return view('pemeliharaanBulananIgcs.index', compact('pemeliharaanbulananigcses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananIgcs.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kabel_coaxial' => 'required',
            'pemeriksaan_modul_modul_ht_maupun_transceiver' => 'required',
            'pemeriksaan_software_program_operasi' => 'required',
            'pemeriksaan_modul_modul_site_controller_dan_base_station' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Igcs::create($request->all());
        return redirect()->route('pemeliharaanBulananIgcs.index')
            ->with('success', 'pemeliharaanBulananIgcs created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Igcs::all();

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
            'pemeriksaan_kabel_coaxial' => 'required',
            'pemeriksaan_modul_modul_ht_maupun_transceiver' => 'required',
            'pemeriksaan_software_program_operasi' => 'required',
            'pemeriksaan_modul_modul_site_controller_dan_base_station' => 'required',
            
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
        

        $pemeliharaanbulananigcs = Pemeliharaan_Bulanan_Igcs::create($data);
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
        $pemeliharaanbulananigcs = Pemeliharaan_Bulanan_Igcs::where('id', '=', $id)->first();
        return view('pemeliharaanBulananIgcs.edit', compact('pemeliharaanbulananigcs'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kabel_coaxial' => 'required',
            'pemeriksaan_modul_modul_ht_maupun_transceiver' => 'required',
            'pemeriksaan_software_program_operasi' => 'required',
            'pemeriksaan_modul_modul_site_controller_dan_base_station' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Igcs::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_kabel_coaxial' => $request->pemeriksaan_kabel_coaxial,
            'pemeriksaan_modul_modul_ht_maupun_transceiver' =>  $request->pemeriksaan_modul_modul_ht_maupun_transceiver,
            'pemeriksaan_software_program_operasi' =>  $request->pemeriksaan_software_program_operasi,
            'pemeriksaan_modul_modul_site_controller_dan_base_station' => $request->pemeriksaan_modul_modul_site_controller_dan_base_station,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananIgcs.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_kabel_coaxial' => 'required',
                'pemeriksaan_modul_modul_ht_maupun_transceiver' => 'required',
                'pemeriksaan_software_program_operasi' => 'required',
                'pemeriksaan_modul_modul_site_controller_dan_base_station' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Igcs::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Igcs::where('id','=',$id)->delete();
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

