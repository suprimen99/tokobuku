<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
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
                return redirect('/login')->with('message, Anda Belum Memiliki Akun, Silakan Registrasi!!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');

    }

    public function registerProcess(Request $request)
    {

        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required'
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        Session::flash('status', 'sucess');
        Session::flash('message', 'Register success, Wait admin Approval');
        return redirect('register');
    }

}
