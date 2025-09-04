<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginKaryawan(){
            return view('auth.loginKaryawan');
        }
    public function pilihrole(){
            return view('auth.pilihrole');
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
    public function loginKaryawanProses(Request $request)
    {
        $request->validate([
            'divisi'     => 'required|string',
            'nama'     => 'required|string',
            'password' => 'required|min:5',
        ],[
            'divisi.required'     => 'Divisi tidak boleh kosong',
            'nama.required'     => 'Nama tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min'      => 'Password minimal 5 karakter',
        ]);

        $karyawan = Karyawan::where('divisi', $request->divisi)
                            ->where('nama', $request->nama)
                            ->first();

        if ($karyawan) {
            if (Hash::check($request->password, $karyawan->password)) {
                Auth::guard('karyawan')->login($karyawan);
                return redirect()->route('pengajuan.index')->with('success','Anda Berhasil Login sebagai Karyawan');
            } else {
                dd('Password salah', $request->password, $karyawan->password);
            }
        } else {
            dd('Data karyawan tidak ditemukan');
        }
    }

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        Auth::guard('karyawan')->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('welcome')->with('success','Anda Berhasil Logout');
    }


}
