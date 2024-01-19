<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Tds;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanTdsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguantdses =Pemeliharaan_Mingguan_Tds::latest()->paginate(5);
        return view('pemeliharaanMingguanTds.index', compact('pemeliharaanmingguantdses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanTds.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_power_supply_220_vac' => 'required',
            'pemeriksaan_dan_pembersihan_konektor_konektor' => 'required',
            'pemeriksaan_fungsi_software_tds' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Tds::create($request->all());
        return redirect()->route('pemeliharaanMingguanTds.index')
            ->with('success', 'pemeliharaanMingguanTds created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Tds::all();

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
            'pemeriksaan_power_supply_220_vac' => 'required',
            'pemeriksaan_dan_pembersihan_konektor_konektor' => 'required',
            'pemeriksaan_fungsi_software_tds' => 'required',
            
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
        

        $pemeliharaanmingguantds = Pemeliharaan_Mingguan_Tds::create($data);
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
        $pemeliharaanmingguantds  =Pemeliharaan_Mingguan_Tds::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanTds.edit', compact('pemeliharaanmingguantds '));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_power_supply_220_vac' => 'required',
            'pemeriksaan_dan_pembersihan_konektor_konektor' => 'required',
            'pemeriksaan_fungsi_software_tds' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Tds::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_power_supply_220_vac' =>  $request->pemeriksaan_power_supply_220_vac,
            'pemeriksaan_dan_pembersihan_konektor_konektor' =>  $request->pemeriksaan_dan_pembersihan_konektor_konektor,
            'pemeriksaan_fungsi_software_tds' =>  $request->pemeriksaan_fungsi_software_tds,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanTds.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_power_supply_220_vac' => 'required',
                'pemeriksaan_dan_pembersihan_konektor_konektor' => 'required',
                'pemeriksaan_fungsi_software_tds' => 'required',
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
            
            Pemeliharaan_Mingguan_Tds::where('id','=',$id)->update($data);
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
           $del =  Pemeliharaan_Mingguan_Tds::where('id','=',$id)->delete();
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


