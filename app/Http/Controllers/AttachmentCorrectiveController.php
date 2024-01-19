<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachment_Corrective;
use Illuminate\Support\Facades\Validator;

class AttachmentCorrectiveController extends Controller
{
    public function indexWeb()
    {
        $attachmentcorrectives = Attachment_Corrective::latest()->paginate(5);
        return view('attachmentCorrective.index', compact('attachmentcorrectives'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('attachmentCorrective.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_corrective' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required'
        ]);

        Attachment_Corrective::create($request->all());
        return redirect()->route('attachmentCorrective.index')
            ->with('success', 'attachmentCorrective created successfully.');

    }
    public function index()
    {
        $data = Attachment_Corrective::all();

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
            'id_corrective' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('image/attachmentcorrective'),$fotoName);
            $data['foto'] = $fotoName;
        }

        $attachmentcorrectives = Attachment_Corrective::create($data);
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
        $attachmentcorrective = Attachment_Corrective::where('id', '=', $id)->first();
        return view('attachmentCorrective.edit', compact('attachmentcorrective'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_corrective' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required',
        ]);
        $data = Attachment_Corrective::where('id', '=', $id)->update([
            'id_corrective' => $request->id_corrective,
            'foto' => $request->foto,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('attachmentCorrective.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'id_corrective' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()
                ],400);
            }
            $data = $request->all();
            if($request->hasFile('foto')){
                $foto = $request->file('foto');
                $fotoName = time() . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('image/attachmentcorrective'),$fotoName);
                $data['foto'] = $fotoName;
            }
            Attachment_Corrective::where('id','=',$id)->update($data);
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
           $del = Attachment_Corrective::where('id','=',$id)->delete();
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
