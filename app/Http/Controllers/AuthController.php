<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function login(Request $request)
    {
       return view('Auth.login');
    }

    public function register(){
        return view('Auth.register');

    }

    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
         
            if(Auth::user()->status != 'active'){

                Session::flash('status', 'Failed');
                Session::flash('message', 'Akun anda tidak aktif, Mohon hubungi admin!!');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return  redirect('dashboard');
            }
            if(Auth::user()->role_id == 2){
                return  redirect('profile');
            }
        }

                Session::flash('status', 'Failed');
                Session::flash('message', 'Login invalid');
                return redirect('/login')->with("Anda Belum Memiliki Akun, Silakan Registrasi!!");
    }
}
