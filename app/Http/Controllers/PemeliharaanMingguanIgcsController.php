<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Igcs;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanIgcsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguanigcses = Pemeliharaan_Mingguan_Igcs::latest()->paginate(5);
        return view('pemeliharaanMingguanIgcs.index', compact('pemeliharaanmingguanigcses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanIgcs.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_atau_pengukuran_voltage_power_supply' => 'required',
            'pemeriksaan_konektor_konektor' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Igcs::create($request->all());
        return redirect()->route('pemeliharaanMingguanIgcs.index')
            ->with('success', 'pemeliharaanMingguanIgcs created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Igcs::all();

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
            'pemeriksaan_atau_pengukuran_voltage_power_supply' => 'required',
            'pemeriksaan_konektor_konektor' => 'required',
            
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
        

        $pemeliharaanmingguanigcs = Pemeliharaan_Mingguan_Igcs::create($data);
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
        $pemeliharaanmingguanigcs =Pemeliharaan_Mingguan_Igcs::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanIgcs.edit', compact('pemeliharaanmingguanigcs'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_atau_pengukuran_voltage_power_supply' => 'required',
            'pemeriksaan_konektor_konektor' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Igcs::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_atau_pengukuran_voltage_power_supply' =>  $request->pemeriksaan_atau_pengukuran_voltage_power_supply,
            'pemeriksaan_konektor_konektor' =>  $request->pemeriksaan_konektor_konektor,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanIgcs.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_atau_pengukuran_voltage_power_supply' => 'required',
                'pemeriksaan_konektor_konektor' => 'required',   
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
            
            Pemeliharaan_Mingguan_Igcs::where('id','=',$id)->update($data);
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
           $del =  Pemeliharaan_Mingguan_Igcs::where('id','=',$id)->delete();
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

