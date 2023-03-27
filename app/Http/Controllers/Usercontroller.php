<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {
        // $request->session()->flush();
        // dd(Auth::user());
    }
}
