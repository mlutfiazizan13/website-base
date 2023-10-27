<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function loginStore(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required' 
        ]);

        if ($validator->fails()) {
            // dd('login-gagal');
            return redirect()->route('login')->with('errors',$validator->errors());
        }

        // dd($request->all());

        if (Auth::attempt($request->only('email', 'password'))) {
            // dd('login-berhasil');
            return redirect('/admin/dashboard');
        } else {
            dd('login-gagal');
        }
    }

    // public function signUp(){
    //     return view('web.auth.signup');
    // }

    // public function signUpStore(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|unique:users',
    //         'password' => 'required|confirmed'
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('signUp')->with('errors', $validator->errors());
    //     }

    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     return redirect()->route('login')->with('success', 'Anda berhasil daftar');
    // }

    public function signOut()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
