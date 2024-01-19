<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Xray;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananXrayController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananxrayes = Pemeliharaan_Bulanan_Xray::latest()->paginate(5);
        return view('pemeliharaanBulananXray.index', compact('pemeliharaanbulananxrayes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananXray.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_function_test_organic_dan_inorganic_stripping' => 'required',
            'pemeriksaan_function_test_zoom_in_zoom_out' => 'required',
            'pemeriksaan_function_test_black_and_white_image' => 'required',
            'pemeriksaan_function_test_image_density_hight_resolution' => 'required',
            'pemeriksaan_function_test_automatic_threat_detection_system' => 'required',
            'pemeriksaan_function_test_threat_image_projection' => 'required',
            'pemeriksaan_function_test_image_archives_atau_image_recall' => 'required',
            'pemeriksaan_kapasitas_hard_disk' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Xray::create($request->all());
        return redirect()->route('pemeliharaanBulananXray.index')
            ->with('success', 'pemeliharaanBulananXray created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Xray::all();

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
            'pemeriksaan_function_test_organic_dan_inorganic_stripping' => 'required',
            'pemeriksaan_function_test_zoom_in_zoom_out' => 'required',
            'pemeriksaan_function_test_black_and_white_image' => 'required',
            'pemeriksaan_function_test_image_density_hight_resolution' => 'required',
            'pemeriksaan_function_test_automatic_threat_detection_system' => 'required',
            'pemeriksaan_function_test_threat_image_projection' => 'required',
            'pemeriksaan_function_test_image_archives_atau_image_recall' => 'required',
            'pemeriksaan_kapasitas_hard_disk' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp' => 'required',
            
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
        

        $pemeliharaanbulananxray= Pemeliharaan_Bulanan_Xray::create($data);
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
        $pemeliharaanbulananxray = Pemeliharaan_Bulanan_Xray::where('id', '=', $id)->first();
        return view('pemeliharaanBulananXray.edit', compact('pemeliharaanbulananxray'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_function_test_organic_dan_inorganic_stripping' => 'required',
            'pemeriksaan_function_test_zoom_in_zoom_out' => 'required',
            'pemeriksaan_function_test_black_and_white_image' => 'required',
            'pemeriksaan_function_test_image_density_hight_resolution' => 'required',
            'pemeriksaan_function_test_automatic_threat_detection_system' => 'required',
            'pemeriksaan_function_test_threat_image_projection' => 'required',
            'pemeriksaan_function_test_image_archives_atau_image_recall' => 'required',
            'pemeriksaan_kapasitas_hard_disk' => 'required',
            'pemeriksaan_ups_automatic_change_over_facility' => 'required',
            'pemeriksaan_ups_expected_back_up_time' => 'required',
            'pemeriksaan_ups_fan' => 'required',
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Xray::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_function_test_organic_dan_inorganic_stripping' => $request->pemeriksaan_function_test_organic_dan_inorganic_stripping,
            'pemeriksaan_function_test_zoom_in_zoom_out' =>  $request->pemeriksaan_function_test_zoom_in_zoom_out,
            'pemeriksaan_function_test_black_and_white_image' => $request->pemeriksaan_function_test_black_and_white_image,
            'pemeriksaan_function_test_image_density_hight_resolution' => $request->pemeriksaan_function_test_image_density_hight_resolution,
            'pemeriksaan_function_test_automatic_threat_detection_system' => $request->pemeriksaan_function_test_automatic_threat_detection_system,
            'pemeriksaan_function_test_threat_image_projection' =>  $request->pemeriksaan_function_test_threat_image_projection,
            'pemeriksaan_function_test_image_archives_atau_image_recall' => $request->pemeriksaan_function_test_image_archives_atau_image_recall,
            'pemeriksaan_kapasitas_hard_disk' => $request->pemeriksaan_kapasitas_hard_disk,
            'pemeriksaan_ups_automatic_change_over_facility' => $request->pemeriksaan_ups_automatic_change_over_facility,
            'pemeriksaan_ups_expected_back_up_time' =>  $request->pemeriksaan_ups_expected_back_up_time,
            'pemeriksaan_ups_fan' => $request->pemeriksaan_ups_fan,
            'pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp' => $request->pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananXray.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_function_test_organic_dan_inorganic_stripping' => 'required',
                'pemeriksaan_function_test_zoom_in_zoom_out' => 'required',
                'pemeriksaan_function_test_black_and_white_image' => 'required',
                'pemeriksaan_function_test_image_density_hight_resolution' => 'required',
                'pemeriksaan_function_test_automatic_threat_detection_system' => 'required',
                'pemeriksaan_function_test_threat_image_projection' => 'required',
                'pemeriksaan_function_test_image_archives_atau_image_recall' => 'required',
                'pemeriksaan_kapasitas_hard_disk' => 'required',
                'pemeriksaan_ups_automatic_change_over_facility' => 'required',
                'pemeriksaan_ups_expected_back_up_time' => 'required',
                'pemeriksaan_ups_fan' => 'required',
                'pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Xray::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Bulanan_Xray::where('id','=',$id)->delete();
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

