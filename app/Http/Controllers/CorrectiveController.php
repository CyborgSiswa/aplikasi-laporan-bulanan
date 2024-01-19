<?php

namespace App\Http\Controllers;

use App\Models\corrective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CorrectiveController extends Controller
{
    public function indexWeb()
    {
        $correctives = Corrective::latest()->paginate(5);
        return view('corrective.index', compact('correctives'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('corrective.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal_mulai_kerusakan' => 'required',
            'tanggal_selesai_perbaikan' => 'required',
            'simbol' => 'required',
            'bagian_kerusakan' => 'required',
            'kategori_kerusakan' => 'required',
            'tindakan' => 'required',
            'keterangan' => 'required',
            'created_by' => 'required'
        ]);

        Corrective::create($request->all());
        return redirect()->route('corrective.index')
            ->with('success', 'corrective created successfully.');

    }
    public function index()
    {
        $data = corrective::all();

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
    public function edit($id)
    {
        $corrective = Corrective::where('id', '=', $id)->first();
        return view('corrective.edit', compact('corrective'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan' => 'required',
            'tanggal_mulai_kerusakan' => 'required',
            'tanggal_selesai_perbaikan' => 'required',
            'simbol' => 'required',
            'bagian_kerusakan' => 'required',
            'kategori_kerusakan' => 'required',
            'tindakan' => 'required',
            'keterangan' => 'required',
            'created_by' => 'required',
        ]);
        $data = Corrective::where('id', '=', $id)->update([
            'id_peralatan' => $request->id_peralatan,
            'tanggal_mulai_kerusakan' => $request->tanggal_mulai_kerusakan,
            'tanggal_selesai_perbaikan' => $request->tanggal_selesai_perbaikan,
            'simbol' => $request->simbol,
            'bagian_kerusakan' => $request->bagian_kerusakan,
            'kategori_kerusakan' => $request->kategori_kerusakan,
            'tindakan' => $request->tindakan,
            'keterangan' => $request->keterangan,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('corrective.index')->with('success', 'edit data success');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'id_peralatan' => 'required',
            'tanggal_mulai_kerusakan' => 'required',
            'tanggal_selesai_perbaikan' => 'required',
            'simbol' => 'required',
            'bagian_kerusakan' => 'required',
            'kategori_kerusakan' => 'required',
            'tindakan' => 'required',
            'keterangan' => 'required',
            
        ]);

        $data = $request->all();
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
    

        $corrective = Corrective::create($data);
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
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_peralatan' => 'required',
                'tanggal_mulai_kerusakan' => 'required',
                'tanggal_selesai_perbaikan' => 'required',
                'simbol' => 'required',
                'bagian_kerusakan' => 'required',
                'kategori_kerusakan' => 'required',
                'tindakan' => 'required',
                'keterangan' => 'required',
            ]);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()
                ],400);
            }
            $data =Corrective::where('id','=',$id)->update($request->all());
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
           $del =Corrective::where('id','=',$id)->delete();
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

