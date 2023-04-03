<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function profile(Request $request)
    {
        return view('Client.Profile');
    }

    public function index()
    {
        return view('Admin.Users');
    }

    public function edit()
    {
        return view('Client.profile-edit');
    }
}
