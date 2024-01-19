<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Mingguan_Jaringan_Fiber_Optic;
use Illuminate\Support\Facades\Validator;

class PemeliharaanMingguanJaringanFiberOpticController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanmingguanjaringanfiberoptices = Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::latest()->paginate(5);
        return view('pemeliharaanMingguanJaringanFiberOptic.index', compact('pemeliharaanmingguanjaringanfiberoptices'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanMingguanJaringanFiberOptic.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_atau_pembersihan_converter' => 'required',
            'pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::create($request->all());
        return redirect()->route('pemeliharaanMingguanJaringanFiberOptic.index')
            ->with('success', 'pemeliharaanMingguanJaringanFiberOptic created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::all();

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
            'pemeriksaan_atau_pembersihan_converter' => 'required',
            'pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord' => 'required',
            
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
        

        $pemeliharaanmingguanjaringanfiberoptic = Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::create($data);
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
        $pemeliharaanmingguanjaringanfiberoptic =Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::where('id', '=', $id)->first();
        return view('pemeliharaanMingguanJaringanFiberOptic.edit', compact('pemeliharaanmingguanjaringanfiberoptic'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_atau_pembersihan_converter' => 'required',
            'pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_atau_pembersihan_converter' =>  $request->pemeriksaan_atau_pembersihan_converter,
            'pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord' => $request->pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanMingguanJaringanFiberOptic.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_atau_pembersihan_converter' => 'required',
                'pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord' => 'required',
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
            
            Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::where('id','=',$id)->update($data);
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
           $del =  Pemeliharaan_Mingguan_Jaringan_Fiber_Optic::where('id','=',$id)->delete();
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