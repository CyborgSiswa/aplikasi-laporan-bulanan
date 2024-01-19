<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Fids;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanFidsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguanfidses = Pemeliharaan_Mingguan_Fids::latest()->paginate(5);
        return view('pemeliharaanMingguanFids.index', compact('pemeliharaanmingguanfidses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanFids.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'cek_koneksi_jaringan_server_dengan_client' => 'required',
            'cek_fids_tiap_tiap_clients' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Fids::create($request->all());
        return redirect()->route('pemeliharaanMingguanFids.index')
            ->with('success', 'pemeliharaanMingguanFids created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Fids::all();

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
            'cek_koneksi_jaringan_server_dengan_client' => 'required',
            'cek_fids_tiap_tiap_clients' => 'required',
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
        

        $pemeliharaanmingguanfids = Pemeliharaan_Mingguan_Fids::create($data);
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
        $pemeliharaanmingguanfids =Pemeliharaan_Mingguan_Fids::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanAccessControl.edit', compact('pemeliharaanmingguanfids'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'cek_koneksi_jaringan_server_dengan_client' => 'required',
            'cek_fids_tiap_tiap_clients' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Fids::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_main_supply_voltage' => $request->pemeriksaan_main_supply_voltage,
            'pemeriksaan_output_voltage_ups' => $request->pemeriksaan_output_voltage_ups,
            'cek_koneksi_jaringan_server_dengan_client' => $request->cek_koneksi_jaringan_server_dengan_client,
            'cek_fids_tiap_tiap_clients' => $request->cek_fids_tiap_tiap_clients,
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => $request->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanFids.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_main_supply_voltage' => 'required',
                'pemeriksaan_output_voltage_ups' => 'required',
                'cek_koneksi_jaringan_server_dengan_client' => 'required',
                'cek_fids_tiap_tiap_clients' => 'required',
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
            
            Pemeliharaan_Mingguan_Fids::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Mingguan_Fids::where('id','=',$id)->delete();
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

