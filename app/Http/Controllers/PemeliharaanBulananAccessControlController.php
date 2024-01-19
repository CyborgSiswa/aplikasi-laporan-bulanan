<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Access_Control;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananAccessControlController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananaccesscontroles = Pemeliharaan_Bulanan_Access_Control::latest()->paginate(5);
        return view('pemeliharaanBulananAccessControl.index', compact('pemeliharaanbulananaccesscontroles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananAccessControl.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric' => 'required',
            'pemeriksaan_fungsi_emergency_exit' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Access_Control::create($request->all());
        return redirect()->route('pemeliharaanBulananAccessControl.index')
            ->with('success', 'pemeliharaanBulananAccessControl created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Access_Control::all();

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
            'pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric' => 'required',
            'pemeriksaan_fungsi_emergency_exit' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
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
        

        $pemeliharaanbulananaccesscontrol = Pemeliharaan_Bulanan_Access_Control::create($data);
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
        $pemeliharaanbulananaccesscontrol = Pemeliharaan_Bulanan_Access_Control::where('id', '=', $id)->first();
        return view('pemeliharaanBulananAccessControl.edit', compact('pemeliharaanbulananaccesscontrol'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric' => 'required',
            'pemeriksaan_fungsi_emergency_exit' => 'required',
            'pengujian_kinerja_secara_berkala' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Access_Control::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric' => $request->pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric,
            'pemeriksaan_fungsi_emergency_exit' =>  $request->pemeriksaan_fungsi_emergency_exit,
            'pengujian_kinerja_secara_berkala' =>  $request->pengujian_kinerja_secara_berkala,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananAccessControl.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric' => 'required',
                'pemeriksaan_fungsi_emergency_exit' => 'required',
                'pengujian_kinerja_secara_berkala' => 'required',
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
            
            Pemeliharaan_Bulanan_Access_Control::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Access_Control::where('id','=',$id)->delete();
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
