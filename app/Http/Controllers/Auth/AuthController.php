<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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

        return redirect()->route('login.index')->withMessage('registration successfully');
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
