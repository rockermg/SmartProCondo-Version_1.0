<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function login(){
        return redirect('/login');
    }

    public function home(){
        return view('dashboard');
    }

    public function profile(){
        return view('profile');
    }
}
