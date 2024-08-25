<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    //
    public function login(){
        $title = "Login Page";
        return view('auth.login', compact('title'));
    }
}
