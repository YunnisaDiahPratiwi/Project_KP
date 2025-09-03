<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    public function loginKaryawan(){
            return view('auth/loginKaryawan');
        }
    public function pilihrole(){
            return view('auth/pilihrole');
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
            return redirect()->route('dashboard')->with('success','Anda Berhasil Login');
        }else{
            return redirect()->back()->with('error','Username atau Password Salah');
        }
    }

// === KARYAWAN LOGIN ===
    public function loginKaryawanProses(Request $request){
        $request->validate([
            'unit'     => 'required|string',
            'nipp'     => 'required|numeric',
            'password' => 'required|min:8',
        ],[
            'unit.required'     => 'Unit tidak boleh kosong',
            'nipp.required'     => 'NIPP tidak boleh kosong',
            'nipp.numeric'      => 'NIPP harus berupa angka',
            'password.required' => 'Password tidak boleh kosong',
            'password.min'      => 'Password minimal 8 karakter',
        ]);

        $credentials = [
            'unit'     => $request->unit,
            'nipp'     => $request->nipp,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.karyawan')->with('success','Anda Berhasil Login sebagai Karyawan');
        } else {
            return redirect()->back()->with('error','Unit, NIPP atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login')->with('success','Anda Berhasil Logout');
    }
}
