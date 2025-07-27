<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $data = array(
            'name'      => $request->name,
            'password'      => $request->password,
        );

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error','Username atau Password Salah');
        }
    }
}
