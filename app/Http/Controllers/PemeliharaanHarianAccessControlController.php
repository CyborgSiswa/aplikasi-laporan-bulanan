<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Access_Control;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianAccessControlController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianaccesscontroles = Pemeliharaan_Harian_Access_Control::latest()->paginate(5);
        return view('pemeliharaanHarianAccessControl.index', compact('pemeliharaanharianaccesscontroles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianAccessControl.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_main_unit' => 'required',
            'pembersihan_ups' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pembersihan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Access_Control::create($request->all());
        return redirect()->route('pemeliharaanHarianAccessControl.index')
            ->with('success', 'pemeliharaanHarianAccessControl created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Access_Control::all();

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
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pembersihan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
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
        

        $pemeliharaanharianaccesscontrol = Pemeliharaan_Harian_Access_Control::create($data);
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
        $pemeliharaanharianaccesscontrol = Pemeliharaan_Harian_Access_Control::where('id', '=', $id)->first();
        return view('pemeliharaanHarianAccessControl.edit', compact('pemeliharaanharianaccesscontrol'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_main_unit' => 'required',
            'pembersihan_ups' => 'required',
            'pemeriksaan_main_supply_voltage' => 'required',
            'pemeriksaan_output_voltage_ups' => 'required',
            'pembersihan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Harian_Access_Control::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_main_unit' => $request->pembersihan_main_unit,
            'pembersihan_ups' => $request->pembersihan_ups,
            'pemeriksaan_main_supply_voltage' =>$request->pemeriksaan_main_supply_voltage,
            'pemeriksaan_output_voltage_ups' => $request->pemeriksaan_output_voltage_ups,
            'pembersihan_kabel_kabel_dan_konektor_yang_terlihat' => $request->pembersihan_kabel_kabel_dan_konektor_yang_terlihat,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianAccessControl.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_main_unit' => 'required',
                'pembersihan_ups' => 'required',
                'pemeriksaan_main_supply_voltage' => 'required',
                'pemeriksaan_output_voltage_ups' => 'required',
                'pembersihan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
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
            
            Pemeliharaan_Harian_Access_Control::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Access_Control::where('id','=',$id)->delete();
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
