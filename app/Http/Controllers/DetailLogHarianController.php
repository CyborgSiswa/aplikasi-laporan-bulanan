<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Log_Harian;
use Illuminate\Support\Facades\Validator;

class DetailLogHarianController extends Controller
{
    public function indexWeb()
    {
        $detaillogharianes = Detail_Log_Harian::latest()->paginate(5);
        return view('detailLogHarian.index', compact('detaillogharianes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('detailLogHarian.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_log_harian' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'created_by' => 'required'
        ]);

        Detail_Log_Harian::create($request->all());
        return redirect()->route('detailLogHarian.index')
            ->with('success', 'detailLogHarian created successfully.');

    }
    public function index()
    {
        $data = Detail_Log_Harian::all();

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
            'id_log_harian' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required'
            
        ]);

        $data = $request->all();
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
        

        $detaillogharian = Detail_Log_Harian::create($data);
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
        $detaillogharian = Detail_Log_Harian::where('id', '=', $id)->first();
        return view('detailLogHarian.edit', compact('detaillogharian'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_log_harian' => 'required',
                'pekerjaan' => 'required',
                'status' => 'required',
            'created_by' => 'required',
        ]);
        $data = Detail_Log_Harian::where('id', '=', $id)->update([
            'id_log_harian' => $request->id_log_harian,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('detailLogHarian.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_log_harian' => 'required',
                'pekerjaan' => 'required',
                'status' => 'required'
            ]);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()
                ],400);
            }
            $data = Detail_Log_Harian::where('id','=',$id)->update($request->all());
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
           $del =Detail_Log_Harian::where('id','=',$id)->delete();
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
