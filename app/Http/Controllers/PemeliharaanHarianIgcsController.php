<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Harian_Igcs;
use Illuminate\Support\Facades\Validator;

class PemeliharaanHarianIgcsController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanharianigcses = Pemeliharaan_Harian_Igcs::latest()->paginate(5);
        return view('pemeliharaanHarianIgcs.index', compact('pemeliharaanharianigcses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanHarianIgcs.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_seluruh_peralatan_ht' => 'required',
            'pembersihan_ruangan_control' => 'required',
            'pembersihan_suhu_dan_ruangan_control' => 'required',
            'mengisi_dan_mencharger_baterai_ht_bila_baterai_off' => 'required',
            'jangan_mengisi_secara_terus_menerus_bila_baterai_full' => 'required',
            'pembersihan_bagian_luar_site_control' => 'required',
            'pembersihan_bagian_luar_base_control' => 'required',
            'pembersihan_bagian_luar_site_manager' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Harian_Igcs::create($request->all());
        return redirect()->route('pemeliharaanHarianIgcs.index')
            ->with('success', 'pemeliharaanHarianIgcs created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Harian_Igcs::all();

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
            'pembersihan_seluruh_peralatan_ht' => 'required',
            'pembersihan_ruangan_control' => 'required',
            'pembersihan_suhu_dan_ruangan_control' => 'required',
            'mengisi_dan_mencharger_baterai_ht_bila_baterai_off' => 'required',
            'jangan_mengisi_secara_terus_menerus_bila_baterai_full' => 'required',
            'pembersihan_bagian_luar_site_control' => 'required',
            'pembersihan_bagian_luar_base_control' => 'required',
            'pembersihan_bagian_luar_site_manager' => 'required',
            
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
        

        $pemeliharaanharianigcs = Pemeliharaan_Harian_Igcs::create($data);
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
        $pemeliharaanharianigcs =Pemeliharaan_Harian_Igcs::where('id', '=', $id)->first();
        return view('pemeliharaanHarianIgcs.edit', compact('pemeliharaanHarianIgcs'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_seluruh_peralatan_ht' => 'required',
            'pembersihan_ruangan_control' => 'required',
            'pembersihan_suhu_dan_ruangan_control' => 'required',
            'mengisi_dan_mencharger_baterai_ht_bila_baterai_off' => 'required',
            'jangan_mengisi_secara_terus_menerus_bila_baterai_full' => 'required',
            'pembersihan_bagian_luar_site_control' => 'required',
            'pembersihan_bagian_luar_base_control' => 'required',
            'pembersihan_bagian_luar_site_manager' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Harian_Igcs::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_seluruh_peralatan_ht' =>  $request->pembersihan_seluruh_peralatan_ht,
            'pembersihan_ruangan_control' =>  $request->pembersihan_ruangan_control,
            'pembersihan_suhu_dan_ruangan_control' =>  $request->pembersihan_suhu_dan_ruangan_control,
            'mengisi_dan_mencharger_baterai_ht_bila_baterai_off' =>  $request->mengisi_dan_mencharger_baterai_ht_bila_baterai_off,
            'jangan_mengisi_secara_terus_menerus_bila_baterai_full' =>  $request->jangan_mengisi__secara_terus_menerus_bila_baterai_full,
            'pembersihan_bagian_luar_site_controlpembersihan_bagian_luar_site_control' => $request->pembersihan_bagian_luar_site_controlpembersihan_bagian_luar_site_control,
            'pembersihan_bagian_luar_base_control' =>  $request->pembersihan_bagian_luar_base_control,
            'pembersihan_bagian_luar_site_manager' =>  $request->pembersihan_bagian_luar_site_manager,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanHarianIgcs.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_seluruh_peralatan_ht' => 'required',
                'pembersihan_ruangan_control' => 'required',
                'pembersihan_suhu_dan_ruangan_control' => 'required',
                'mengisi_dan_mencharger_baterai_ht_bila_baterai_off' => 'required',
                'jangan_mengisi_secara_terus_menerus_bila_baterai_full' => 'required',
                'pembersihan_bagian_luar_site_control' => 'required',
                'pembersihan_bagian_luar_base_control' => 'required',
                'pembersihan_bagian_luar_site_manager' => 'required',
                
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
            
            Pemeliharaan_Harian_Igcs::where('id','=',$id)->update($data);
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
           $del = Pemeliharaan_Harian_Igcs::where('id','=',$id)->delete();
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

