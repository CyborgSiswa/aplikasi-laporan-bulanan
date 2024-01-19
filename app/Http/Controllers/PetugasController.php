<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Validator;

class PetugasController extends Controller
{
    public function indexWeb()
    {
        $petugases =Petugas::latest()->paginate(5);
        return view('petugas.index', compact('petugases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('petugas.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'kode_jabatan' => 'required',
            'jabatan' => 'required',
            'kode_cabang' => 'required',
            'bandara' => 'required',
            'unit_kerja' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required'
        ]);

        Petugas::create($request->all());
        return redirect()->route('petugas.index')
            ->with('success', 'petugas created successfully.');

    }
    public function index()
    {
        $data = Petugas::all();

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
            'nama' => 'required',
            'nik' => 'required',
            'kode_jabatan' => 'required',
            'jabatan' => 'required',
            'kode_cabang' => 'required',
            'bandara' => 'required',
            'unit_kerja' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ],400);
        }
        $data = $request->all();
        $petugas = Petugas::create($data);
        if($petugas){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'failed',
                'data' => $data
            ]);
        }
    }
    public function edit($id)
    {
        $petugas =Petugas::where('id', '=', $id)->first();
        return view('petugas.edit', compact('petugas'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'kode_jabatan' => 'required',
            'jabatan' => 'required',
            'kode_cabang' => 'required',
            'bandara' => 'required',
            'unit_kerja' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required',
        ]);
        $data = Petugas::where('id', '=', $id)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kode_jabatan' => $request->kode_jabatan,
            'jabatan' => $request->jabatan,
            'kode_cabang' => $request->kode_cabang,
            'bandara' =>$request->bandara,
            'unit_kerja' => $request->unit_kerja,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'foto' => $request->foto,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('petugas.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'nama' => 'required',
                'nik' => 'required',
                'kode_jabatan' => 'required',
                'jabatan' => 'required',
                'kode_cabang' => 'required',
                'bandara' => 'required',
                'unit_kerja' => 'required',
                'email' => 'required',
                'no_hp' => 'required',
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
                $foto->move(public_path('image/petugas'),$fotoName);
                $data['foto'] = $fotoName;
            }
            Petugas::where('id','=',$id)->update($data);
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
           $del = Petugas::where('id','=',$id)->delete();
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
