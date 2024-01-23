<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Gawang_Pendeteksi_Metal;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianGawangPendeteksiMetalController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanhariangawangpendeteksimetales = Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::latest()->paginate(5);
        return view('pemeliharaanHarianGawangPendeteksiMetal.index', compact('pemeliharaanhariangawangpendeteksimetales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianGawangPendeteksiMetal.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_main_unit' => 'required',
            'pembersihan_ups' => 'required',
            'lokasi_sekitar_penempatan_peralatan' => 'required',
            'periksa_main_supply_voltage' => 'required',
            'periksa_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::create($request->all());
        return redirect()->route('pemeliharaanHarianGawangPendeteksiMetal.index')
            ->with('success', 'pemeliharaanHarianGawangPendeteksiMetal created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::all();

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
            'pembersihan_main_unit' => 'required',
            'pembersihan_ups' => 'required',
            'lokasi_sekitar_penempatan_peralatan' => 'required',
            'periksa_main_supply_voltage' => 'required',
            'periksa_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
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
        

        $pemeliharaanhariangawangpendeteksimetal = Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::create($data);
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
        $pemeliharaanhariangawangpendeteksimetal =Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::where('id', '=', $id)->first();
        return view('pemeliharaanHarianGawangPendeteksiMetal.edit', compact('pemeliharaanhariangawangpendeteksimetal'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_main_unit' => 'required',
            'pembersihan_ups' => 'required',
            'lokasi_sekitar_penempatan_peralatan' => 'required',
            'periksa_main_supply_voltage' => 'required',
            'periksa_output_voltage_ups' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_main_unit' =>  $request->pembersihan_main_unit,
            'pembersihan_ups' =>  $request->pembersihan_ups,
            'lokasi_sekitar_penempatan_peralatan' =>  $request->lokasi_sekitar_penempatan_peralatan,
            'periksa_main_supply_voltage' =>  $request->periksa_main_supply_voltage,
            'periksa_output_voltage_ups' =>  $request->periksa_output_voltage_ups,
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' =>  $request->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianGawangPendeteksiMetal.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_main_unit' => 'required',
                'pembersihan_ups' => 'required',
                'lokasi_sekitar_penempatan_peralatan' => 'required',
                'periksa_main_supply_voltage' => 'required',
                'periksa_output_voltage_ups' => 'required',
                'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
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
            
            Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Gawang_Pendeteksi_Metal::where('id','=',$id)->delete();
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
