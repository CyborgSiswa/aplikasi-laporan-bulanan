<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log_Harian;
use Illuminate\Support\Facades\Validator;

class LogHarianController extends Controller
{
    public function indexWeb()
    {
        $logharianes = Log_Harian::latest()->paginate(5);
        return view('logHarian.index', compact('logharianes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('logHarian.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_log_harian'=> 'required',
            'tanggal' => 'required',
            'created_by' => 'required'
        ]);

        Log_Harian::create($request->all());
        return redirect()->route('logHarian.index')
            ->with('success', 'logHarian created successfully.');

    }
    public function index()
    {
        $data = Log_Harian::all();

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
            'id_petugas' => 'required',
            'id_log_harian' => 'required',
            'tanggal' => 'required',
            
        ]);

        $data = $request->all();
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
        

        $logharian = Log_Harian::create($data);
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
        $logharian = Log_Harian::where('id', '=', $id)->first();
        return view('logHarian.edit', compact('logharian'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_log_harian' => 'required',
            'tanggal' => 'required',
            'created_by' => 'required',
        ]);
        $data = Log_Harian::where('id', '=', $id)->update([
            'id_petugas' => $request->id_petugas,
            'tanggal' => $request->tanggal,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('logHarian.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
            'id_petugas' => 'required',
            'id_log_harian' => 'required',
            'tanggal' => 'required',
            ]);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()
                ],400);
            }
            $data = Log_Harian::where('id','=',$id)->update($request->all());
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
           $del =Log_Harian::where('id','=',$id)->delete();
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

