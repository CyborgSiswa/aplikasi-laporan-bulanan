<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Public_Address_System_Atau_Pas;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianPublicAddressSystemAtauPasController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianpublicaddresssystemataupases = Pemeliharaan_Harian_Public_Address_System_Atau_Pas::latest()->paginate(5);
        return view('pemeliharaanHarianPublicAddressSystemAtauPas.index', compact('pemeliharaanharianpublicaddresssystemataupases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianPublicAddressSystemAtauPas.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kebersihan_ruangan_rak_amplifier' => 'required',
            'pemeriksaan_uji_coba_change_over_unit' => 'required',
            'pemeriksaan_suhu_dan_kelembaban_ruangan' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Public_Address_System_Atau_Pas::create($request->all());
        return redirect()->route('pemeliharaanHarianPublicAddressSystemAtauPas.index')
            ->with('success', 'pemeliharaanHarianPublicAddressSystemAtauPas created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Public_Address_System_Atau_Pas::all();

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
            'pemeriksaan_kebersihan_ruangan_rak_amplifier' => 'required',
            'pemeriksaan_uji_coba_change_over_unit' => 'required',
            'pemeriksaan_suhu_dan_kelembaban_ruangan' => 'required',
            
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
        

        $pemeliharaanharianpublicaddresssystemataupas = Pemeliharaan_Harian_Public_Address_System_Atau_Pas::create($data);
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
        $pemeliharaanharianpublicaddresssystemataupas =Pemeliharaan_Harian_Public_Address_System_Atau_Pas::where('id', '=', $id)->first();
        return view('pemeliharaanHarianPublicAddressSystemAtauPas.edit', compact('pemeliharaanharianpublicaddresssystemataupas'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pemeriksaan_kebersihan_ruangan_rak_amplifier' => 'required',
            'pemeriksaan_uji_coba_change_over_unit' => 'required',
            'pemeriksaan_suhu_dan_kelembaban_ruangan' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data =Pemeliharaan_Harian_Public_Address_System_Atau_Pas::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pemeriksaan_kebersihan_ruangan_rak_amplifier' => $request->pemeriksaan_kebersihan_ruangan_rak_amplifier,
            'pemeriksaan_uji_coba_change_over_unit' => $request->pemeriksaan_uji_coba_change_over_unit,
            'pemeriksaan_suhu_dan_kelembaban_ruangan' => $request->pemeriksaan_suhu_dan_kelembaban_ruangan,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianPublicAddressSystemAtauPas.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pemeriksaan_kebersihan_ruangan_rak_amplifier' => 'required',
                'pemeriksaan_uji_coba_change_over_unit' => 'required',
                'pemeriksaan_suhu_dan_kelembaban_ruangan' => 'required',
                
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
            
            Pemeliharaan_Harian_Public_Address_System_Atau_Pas::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Public_Address_System_Atau_Pas::where('id','=',$id)->delete();
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
