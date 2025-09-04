<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    // untuk menampilkan daftar pengajuan
    public function daftar()
    {
        $title = 'Daftar Pengajuan';

        // ambil semua data pengajuan + relasi karyawan
        $pengajuans = Pengajuan::with('karyawan')->get();

        // kirim data ke view
        return view('pengajuan.daftar', compact('title', 'pengajuans'));
    }
}
