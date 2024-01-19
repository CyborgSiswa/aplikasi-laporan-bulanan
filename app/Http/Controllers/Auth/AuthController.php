<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function postLogin(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Opps!  You have entered invalid credentials');
    }

    public function loginApi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 400);
        }
        $login = User::where('email', '=', $request->email)->first();
        if ($login) {
            return response()->json([
                'message' => 'success',
                'data' => $login,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
    }

    public function postRegistration(Request $request)
    {
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
        return response()->json([
            'message' => 'failed',
        ], 500);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('Auth.dashboard');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
