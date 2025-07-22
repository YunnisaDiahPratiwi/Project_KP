<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'name'      => 'required',
            'password'  => 'required|min:8',
        ],[
            'name.required' => 'Nama Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password Minimal 8 Karakter',
        ]);
    }
}
