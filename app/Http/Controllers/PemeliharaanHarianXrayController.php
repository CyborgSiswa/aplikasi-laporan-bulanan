<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Xray;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianXrayController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianxrayes = Pemeliharaan_Harian_Xray::latest()->paginate(5);
        return view('pemeliharaanHarianXray.index', compact('pemeliharaanharianxrayes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianXray.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_lead_curtain' => 'required',
            'pemeriksaan_lead_shielding' => 'required',
            'pemeriksaan_conveyor_belt' => 'required',
            'pemeriksaan_conveyor_roller' => 'required',
            'pemeriksaan_housing_panel' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'unit_bagian_luar' => 'required',
            'monitor' => 'required',
            'ups' => 'required',
            'lokasi_sekitar_peralatan_x_ray' => 'required',
            'key_switch' => 'required',
            'power_on_off_key' => 'required',
            'emergency_stop_keys' => 'required',
            'tuts_key_keyboard' => 'required',
            'mouse_pad_mouse_roller' => 'required',
            'forward_atau_reverse' => 'required',
            'main_input_voltage' => 'required',
            'output_voltage_ups' => 'required',
            'power_on_lamp' => 'required',
            'x_ray_generator_on_lamp' => 'required',
            'pemeriksaan_safety_rollers_atau_spring_roller' => 'required',
            'tombol_pengendali_monitor' => 'required',
            'brightness' => 'required',
            'sharpness' => 'required',
            'contrast' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Xray::create($request->all());
        return redirect()->route('pemeliharaanHarianXray.index')
            ->with('success', 'pemeliharaanHarianXray created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Xray::all();

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
            'pemeriksaan_lead_curtain' => 'required',
            'pemeriksaan_lead_shielding' => 'required',
            'pemeriksaan_conveyor_belt' => 'required',
            'pemeriksaan_conveyor_roller' => 'required',
            'pemeriksaan_housing_panel' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'unit_bagian_luar' => 'required',
            'monitor' => 'required',
            'ups' => 'required',
            'lokasi_sekitar_peralatan_x_ray' => 'required',
            'key_switch' => 'required',
            'power_on_off_key' => 'required',
            'emergency_stop_keys' => 'required',
            'tuts_key_keyboard' => 'required',
            'mouse_pad_mouse_roller' => 'required',
            'forward_atau_reverse' => 'required',
            'main_input_voltage' => 'required',
            'output_voltage_ups' => 'required',
            'power_on_lamp' => 'required',
            'x_ray_generator_on_lamp' => 'required',
            'pemeriksaan_safety_rollers_atau_spring_roller' => 'required',
            'tombol_pengendali_monitor' => 'required',
            'brightness' => 'required',
            'sharpness' => 'required',
            'contrast' => 'required',
            
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
        

        $pemeliharaanharianxray = Pemeliharaan_Harian_Xray::create($data);
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
        $pemeliharaanharianxray =Pemeliharaan_Harian_Xray::where('id', '=', $id)->first();
        return view('pemeliharaanHarianXray.edit', compact('pemeliharaanharianxray'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_lead_curtain' => 'required',
            'pemeriksaan_lead_shielding' => 'required',
            'pemeriksaan_conveyor_belt' => 'required',
            'pemeriksaan_conveyor_roller' => 'required',
            'pemeriksaan_housing_panel' => 'required',
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
            'unit_bagian_luar' => 'required',
            'monitor' => 'required',
            'ups' => 'required',
            'lokasi_sekitar_peralatan_x_ray' => 'required',
            'key_switch' => 'required',
            'power_on_off_key' => 'required',
            'emergency_stop_keys' => 'required',
            'tuts_key_keyboard' => 'required',
            'mouse_pad_mouse_roller' => 'required',
            'forward_atau_reverse' => 'required',
            'main_input_voltage' => 'required',
            'output_voltage_ups' => 'required',
            'power_on_lamp' => 'required',
            'x_ray_generator_on_lamp' => 'required',
            'pemeriksaan_safety_rollers_atau_spring_roller' => 'required',
            'tombol_pengendali_monitor' => 'required',
            'brightness' => 'required',
            'sharpness' => 'required',
            'contrast' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Harian_Xray::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_lead_curtain' => $request->pemeriksaan_lead_curtain,
            'pemeriksaan_lead_shielding' => $request->pemeriksaan_lead_shielding,
            'pemeriksaan_conveyor_belt' => $request->pemeriksaan_conveyor_belt,
            'pemeriksaan_conveyor_roller' => $request->pemeriksaan_conveyor_roller,
            'pemeriksaan_housing_panel' => $request->pemeriksaan_housing_panel,
            'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => $request->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat,
            'unit_bagian_luar' =>$request->unit_bagian_luar,
            'monitor' => $request->monitor,
            'ups' => $request->ups,
            'lokasi_sekitar_peralatan_x_ray' => $request->lokasi_sekitar_peralatan_x_ray,
            'key_switch' => $request->key_switch,
            'power_on_off_key' => $request->power_on_off_key,
            'emergency_stop_keys' => $request->emergency_stop_keys,
            'tuts_key_keyboard' => $request->tuts_key_keyboard,
            'mouse_pad_mouse_roller' => $request->mouse_pad_mouse_roller,
            'forward_atau_reverse' => $request->forward_atau_reverse,
            'main_input_voltage' => $request->main_input_voltage,
            'output_voltage_ups' => $request->output_voltage_ups,
            'power_on_lamp' =>$request->power_on_lamp,
            'x_ray_generator_on_lamp' => $request->x_ray_generator_on_lamp,
            'pemeriksaan_safety_rollers_atau_spring_roller' => $request->pemeriksaan_safety_rollers_atau_spring_roller,
            'tombol_pengendali_monitor' => $request->tombol_pengendali_monitor,
            'brightness' => $request->brightness,
            'sharpness' => $request->sharpness,
            'contrast' => $request->contrast,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianXray.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_lead_curtain' => 'required',
                'pemeriksaan_lead_shielding' => 'required',
                'pemeriksaan_conveyor_belt' => 'required',
                'pemeriksaan_conveyor_roller' => 'required',
                'pemeriksaan_housing_panel' => 'required',
                'pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat' => 'required',
                'unit_bagian_luar' => 'required',
                'monitor' => 'required',
                'ups' => 'required',
                'lokasi_sekitar_peralatan_x_ray' => 'required',
                'key_switch' => 'required',
                'power_on_off_key' => 'required',
                'emergency_stop_keys' => 'required',
                'tuts_key_keyboard' => 'required',
                'mouse_pad_mouse_roller' => 'required',
                'forward_atau_reverse' => 'required',
                'main_input_voltage' => 'required',
                'output_voltage_ups' => 'required',
                'power_on_lamp' => 'required',
                'x_ray_generator_on_lamp' => 'required',
                'pemeriksaan_safety_rollers_atau_spring_roller' => 'required',
                'tombol_pengendali_monitor' => 'required',
                'brightness' => 'required',
                'sharpness' => 'required',
                'contrast' => 'required',
                
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
            
            Pemeliharaan_Harian_Xray::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Xray::where('id','=',$id)->delete();
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
