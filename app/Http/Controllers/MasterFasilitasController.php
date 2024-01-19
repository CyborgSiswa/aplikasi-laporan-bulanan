<?php

namespace App\Http\Controllers;

use App\Models\Master_Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterFasilitasController extends Controller
{
    public function indexWeb()
    {
        $masterfasilitases = Master_Fasilitas::latest()->paginate(5);
        return view('masterFasilitas.index', compact('masterfasilitases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('masterFasilitas.create');
    }
    public function storeWeb(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan_fasilitas_master' => 'required',
            'created_by' => 'required',
        ]);

        Master_Fasilitas::create($request->all());
        return redirect()->route('masterFasilitas.index')
            ->with('success', 'masterFasilitas created successfully.');

    }
    public function index()
    {
        $data = Master_Fasilitas::all();

        if ($data) {
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'not found',
                'data' => $data,
            ]);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_fasilitas' => 'required',
            'keterangan_fasilitas_master' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 400);
        }
        $data = $request->all();
        $masterfasilitas = Master_Fasilitas::create($data);
        if ($masterfasilitas) {
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'failed',
                'data' => $data,
            ]);
        }
    }
    public function edit($id)
    {
        $masterfasilitas = Master_Fasilitas::where('id', '=', $id)->first();
        return view('masterFasilitas.edit', compact('masterfasilitas'));
    }
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan_fasilitas_master' => 'required',
            'created_by' => 'required',
        ]);
        $data = Master_Fasilitas::where('id', '=', $id)->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan_fasilitas_master' => $request->keterangan_fasilitas_master,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('masterFasilitas.index')->with('success', 'edit data success');
    }
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_fasilitas' => 'required',
                'keterangan_fasilitas_master' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'error' => $validator->errors(),
                ], 400);
            }
            $data = Master_Fasilitas::where('id', '=', $id)->update($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'failed',
                'data' => $e,
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $del = Master_Fasilitas::where('id', '=', $id)->delete();
            if ($del) {
                return response()->json([
                    'message' => 'success',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'failed destroy data',
                ], 400);
            }

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'failed query',
            ], 500);
        }
    }
}
