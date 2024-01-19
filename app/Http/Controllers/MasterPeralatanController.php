<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Peralatan;
use Illuminate\Support\Facades\Validator;
class MasterPeralatanController extends Controller
{
    public function indexWeb()
    {
        $masterperalatanes = Master_Peralatan::latest()->paginate(5);
        return view('masterPeralatan.index', compact('masterperalatanes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('masterPeralatan.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'id_peralatan'=> 'required',
            'nama_peralatan' => 'required',
            'lokasi' => 'required',
            'total_jam_terputus' => 'required',
            'id_fasilitas' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required'
        ]);

        Master_Peralatan::create($request->all());
        return redirect()->route('masterPeralatan.index')
            ->with('success', 'masterPeralatan created successfully.');

    }
    public function index()
    {
        $data = Master_Peralatan::all();

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
            'id_peralatan'=> 'required',
            'nama_peralatan' => 'required',
            'lokasi' => 'required',
            'total_jam_terputus' => 'required',
            'id_fasilitas' => 'required',
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
            $foto->move(public_path('image/peralatan'),$fotoName);
            $data['foto'] = $fotoName;
        }

        $masterperalatan = Master_Peralatan::create($data);
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
        $masterperalatan = Master_Peralatan::where('id', '=', $id)->first();
        return view('masterPeralatan.edit', compact('masterperalatan'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'id_peralatan'=> 'required',
            'nama_peralatan' => 'required',
            'lokasi' => 'required',
            'total_jam_terputus' => 'required',
            'id_fasilitas' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required',
        ]);
        $data = Master_Peralatan::where('id', '=', $id)->update([
            'id_peralatan' => $request->id_peralatan,
            'nama_peralatan' => $request->nama_peralatan,
            'lokasi' => $request->lokasi,
            'total_jam_terputus' => $request->total_jam_terputus,
            'id_fasilitas' =>$request->id_fasilitas,
            'foto' => $request->foto,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('masterPeralatan.index')->with('success', 'edit data success');
    }
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
            'id_peralatan'=> 'required',
            'nama_peralatan' => 'required',
            'lokasi' => 'required',
            'total_jam_terputus' => 'required',
            'id_fasilitas' => 'required',
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
                $foto->move(public_path('image/peralatan'),$fotoName);
                $data['foto'] = $fotoName;
            }
            Master_Peralatan::where('id','=',$id)->update($data);
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
           $del =Master_Peralatan::where('id','=',$id)->delete();
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
