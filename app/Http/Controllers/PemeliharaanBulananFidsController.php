<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Fids;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananFidsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananfidses = Pemeliharaan_Bulanan_Fids::latest()->paginate(5);
        return view('pemeliharaanBulananFids.index', compact('pemeliharaanbulananfidses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananFids.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_jaringan' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'pemeriksaan_access_switch_dan_distribution_switch' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Fids::create($request->all());
        return redirect()->route('pemeliharaanBulananFids.index')
            ->with('success', 'pemeliharaanBulananFids created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Fids::all();

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
            'pemeriksaan_jaringan' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'pemeriksaan_access_switch_dan_distribution_switch' => 'required',
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
        

        $pemeliharaanbulananfids = Pemeliharaan_Bulanan_Fids::create($data);
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
        $pemeliharaanbulananfids = Pemeliharaan_Bulanan_Fids::where('id', '=', $id)->first();
        return view('pemeliharaanBulananFids.edit', compact('pemeliharaanbulananfids'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_jaringan' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'pemeriksaan_access_switch_dan_distribution_switch' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Fids::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_jaringan' => $request->pemeriksaan_jaringan,
            'pengujian_kinerja_secara_berkala' =>  $request->pengujian_kinerja_secara_berkala,
            'pemeriksaan_access_switch_dan_distribution_switch' =>  $request->pemeriksaan_access_switch_dan_distribution_switch,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananFids.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_jaringan' => 'required',
                'pengujian_kinerja_secara_berkala' => 'required',
                'pemeriksaan_access_switch_dan_distribution_switch' => 'required',
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
            
            Pemeliharaan_Bulanan_Fids::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Fids::where('id','=',$id)->delete();
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

