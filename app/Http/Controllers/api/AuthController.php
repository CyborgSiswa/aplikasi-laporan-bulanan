<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $validation = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validation->fails()){
            return response()->json([
                'status' => 'fails',
                'message' => 'input unauthorized',
                'error' => $validation->errors()
            ],403);
        }
        $credentials = $request->only('email', 'password');
        $user = User::where('email','=',$credentials['email'])->first();
        if($user > 0 && bcrypt($credentials['password']) == $user->password){
            return response()->json([
                'status' => 'success',
                'message' => 'login success',
                'data' => $user
            ],200);
        }
        return response()->json([
            'status' => 'fails',
            'message' => 'login fails',
        ],404);
    }

    public function postRegistration(Request $request)
    {
       try {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 400);
        }
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        if ($user) {
            return response()->json([
                'message' => 'success',
            ], 200);
        }
        
       } catch (\Exception $e) {
        return response()->json([
            'message' => 'error',
            'deskripsi' => $e->getMessage()
        ], 500);
       }
    }
}
