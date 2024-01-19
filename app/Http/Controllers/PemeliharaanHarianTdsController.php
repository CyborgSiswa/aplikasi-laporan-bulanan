<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Tds;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianTdsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanhariantdses = Pemeliharaan_Harian_Tds::latest()->paginate(5);
        return view('pemeliharaanHarianTds.index', compact('pemeliharaanhariantdses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianTds.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_ruangan_peralatan_server_tds' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds' => 'required',
            'pembersihan_bagian_luar_peralatan_tds' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Tds::create($request->all());
        return redirect()->route('pemeliharaanHarianTds.index')
            ->with('success', 'pemeliharaanHarianTds created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Tds::all();

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
            'pembersihan_ruangan_peralatan_server_tds' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds' => 'required',
            'pembersihan_bagian_luar_peralatan_tds' => 'required',
            
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
        

        $pemeliharaanhariantds = Pemeliharaan_Harian_Tds::create($data);
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
        $pemeliharaanhariantds =Pemeliharaan_Harian_Tds::where('id', '=', $id)->first();
        return view('pemeliharaanHarianTds.edit', compact('pemeliharaanhariantds'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_ruangan_peralatan_server_tds' => 'required',
            'periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds' => 'required',
            'pembersihan_bagian_luar_peralatan_tds' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data =Pemeliharaan_Harian_Tds::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_ruangan_peralatan_server_tds' => $request->pembersihan_ruangan_peralatan_server_tds,
            'periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds' => $request->periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds,
            'pembersihan_bagian_luar_peralatan_tds' => $request->pembersihan_bagian_luar_peralatan_tds,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianTds.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_ruangan_peralatan_server_tds' => 'required',
                'periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds' => 'required',
                'pembersihan_bagian_luar_peralatan_tds' => 'required',
                
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
            
            Pemeliharaan_Harian_Tds::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Tds::where('id','=',$id)->delete();
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