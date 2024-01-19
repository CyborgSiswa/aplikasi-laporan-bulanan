<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeliharaan_Bulanan_Running_Text;
use Illuminate\Support\Facades\Validator;

class PemeliharaanBulananRunningTextController extends Controller
{
    public function indexWeb()
    {
        $pemeliharaanbulananrunningtextes = Pemeliharaan_Bulanan_Running_Text::latest()->paginate(5);
        return view('pemeliharaanBulananRunningText.index', compact('pemeliharaanbulananrunningtextes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pemeliharaanBulananRunningText.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_dan_pemeriksaan_led' => 'required',
            'pemeriksaan_control_elements' => 'required',
            'pemeriksaan_perangkat_dari_kerusakan_fisik' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required'
        ]);

        Pemeliharaan_Bulanan_Running_Text::create($request->all());
        return redirect()->route('pemeliharaanBulananRunningText.index')
            ->with('success', 'pemeliharaanBulananRunningText created successfully.');

    }
    public function index()
    {
        $data = Pemeliharaan_Bulanan_Running_Text::all();

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
            'pembersihan_dan_pemeriksaan_led' => 'required',
            'pemeriksaan_control_elements' => 'required',
            'pemeriksaan_perangkat_dari_kerusakan_fisik' => 'required',
            
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
        

        $pemeliharaanbulananrunningtext = Pemeliharaan_Bulanan_Running_Text::create($data);
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
        $pemeliharaanbulananrunningtext = Pemeliharaan_Bulanan_Running_Text::where('id', '=', $id)->first();
        return view('pemeliharaanBulananRunningText.edit', compact('pemeliharaanbulananrunningtext'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal' => 'required',
            'pembersihan_dan_pemeriksaan_led' => 'required',
            'pemeriksaan_control_elements' => 'required',
            'pemeriksaan_perangkat_dari_kerusakan_fisik' => 'required',
            'keterangan' => 'required',
            'id_personil' => 'required',
            'id_pengawas' => 'required',
            'created_by' => 'required',
        ]);
        $data = Pemeliharaan_Bulanan_Running_Text::where('id', '=', $id)->update([
            'id_peralatan' =>  $request->id_peralatan,
            'tanggal' => $request->tanggal,
            'pembersihan_dan_pemeriksaan_led' => $request->pembersihan_dan_pemeriksaan_led,
            'pemeriksaan_control_elements' =>  $request->pemeriksaan_control_elements,
            'pemeriksaan_perangkat_dari_kerusakan_fisik' => $request->pemeriksaan_perangkat_dari_kerusakan_fisik,
            'keterangan' =>  $request->keterangan,
            'id_personil' =>  $request->id_personil,
            'id_pengawas' =>  $request->id_pengawas,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('pemeliharaanBulananRunningText.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal' => 'required',
                'pembersihan_dan_pemeriksaan_led' => 'required',
                'pemeriksaan_control_elements' => 'required',
                'pemeriksaan_perangkat_dari_kerusakan_fisik' => 'required',
                
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
            
            Pemeliharaan_Bulanan_Running_Text::where('id','=',$id)->update($data);
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
           $del =Pemeliharaan_Bulanan_Running_Text::where('id','=',$id)->delete();
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



