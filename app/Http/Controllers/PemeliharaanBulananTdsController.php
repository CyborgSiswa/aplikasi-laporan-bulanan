<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Tds;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananTdsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulanantdses = Pemeliharaan_Bulanan_Tds::latest()->paginate(5);
        return view('pemeliharaanBulananTds.index', compact('pemeliharaanbulanantdses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananTds.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kebersihan_server_dan_network' => 'required',
            'pemeriksaan_fungsi_ups' => 'required',
            'pemeriksaan_gps_dan_setting_timezone' => 'required',
            'pemeriksaan_kebersihan_digital_clock' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Tds::create($request->all());
        return redirect()->route('pemeliharaanBulananTds.index')
            ->with('success', 'pemeliharaanBulananTds created successfully.');

    }

    public function index()
    {
        $data = Pemeliharaan_Bulanan_Tds::all();

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
            'pemeriksaan_kebersihan_server_dan_network' => 'required',
            'pemeriksaan_fungsi_ups' => 'required',
            'pemeriksaan_gps_dan_setting_timezone' => 'required',
            'pemeriksaan_kebersihan_digital_clock' => 'required',
            
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
        

        $pemeliharaanbulanantds = Pemeliharaan_Bulanan_Tds::create($data);
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
        $pemeliharaanbulanantds = Pemeliharaan_Bulanan_Tds::where('id', '=', $id)->first();
        return view('pemeliharaanBulananTds.edit', compact('pemeliharaanbulanantds'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kebersihan_server_dan_network' => 'required',
            'pemeriksaan_fungsi_ups' => 'required',
            'pemeriksaan_gps_dan_setting_timezone' => 'required',
            'pemeriksaan_kebersihan_digital_clock' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Tds::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_kebersihan_server_dan_network' => $request->pemeriksaan_kebersihan_server_dan_network,
            'pemeriksaan_fungsi_ups' =>  $request->pemeriksaan_fungsi_ups,
            'pemeriksaan_gps_dan_setting_timezone' => $request->pemeriksaan_gps_dan_setting_timezone,
            'pemeriksaan_kebersihan_digital_clock' => $request->pemeriksaan_kebersihan_digital_clock,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananTds.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_kebersihan_server_dan_network' => 'required',
                'pemeriksaan_fungsi_ups' => 'required',
                'pemeriksaan_gps_dan_setting_timezone' => 'required',
                'pemeriksaan_kebersihan_digital_clock' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Tds::where('id','=',$id)->update($data);
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
           $del =Pemeliharaan_Bulanan_Tds::where('id','=',$id)->delete();
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
