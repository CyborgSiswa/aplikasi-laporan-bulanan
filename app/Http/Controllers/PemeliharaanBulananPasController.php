<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Pas;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananPasController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananpases = Pemeliharaan_Bulanan_Pas::latest()->paginate(5);
        return view('pemeliharaanBulananPas.index', compact('pemeliharaanbulananpases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananPas.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_setiap_zone_group_speaker_amplifier' => 'required',
            'pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_mikrofon_dan_push_button_desk' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Pas::create($request->all());
        return redirect()->route('pemeliharaanBulananPas.index')
            ->with('success', 'pemeliharaanBulananPas created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Pas::all();

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
            'pemeriksaan_setiap_zone_group_speaker_amplifier' => 'required',
            'pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_mikrofon_dan_push_button_desk' => 'required',
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
        

        $pemeliharaanbulananpas = Pemeliharaan_Bulanan_Pas::create($data);
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
        $pemeliharaanbulananpas = Pemeliharaan_Bulanan_Pas::where('id', '=', $id)->first();
        return view('pemeliharaanBulananPas.edit', compact('pemeliharaanbulananpas'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_setiap_zone_group_speaker_amplifier' => 'required',
            'pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_mikrofon_dan_push_button_desk' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Pas::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_setiap_zone_group_speaker_amplifier' => $request->pemeriksaan_setiap_zone_group_speaker_amplifier,
            'pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player' =>  $request->pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player,
            'pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player' => $request->pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player,
            'pemeriksaan_kondisi_mikrofon_dan_push_button_desk' =>  $request->pemeriksaan_kondisi_mikrofon_dan_push_button_desk,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananPas.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_setiap_zone_group_speaker_amplifier' => 'required',
            'pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player' => 'required',
            'pemeriksaan_kondisi_mikrofon_dan_push_button_desk' => 'required',
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
            
            Pemeliharaan_Bulanan_Pas::where('id','=',$id)->update($data);
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
           $del =Pemeliharaan_Bulanan_Pas::where('id','=',$id)->delete();
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

