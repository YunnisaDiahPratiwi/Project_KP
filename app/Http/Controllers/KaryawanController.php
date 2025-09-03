<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class KaryawanController extends Controller
{
    public function index(){
        $data = array(
            "title"              => "Pengajuan Perangkat Bermasalah",
            'it_asset'         => 'IT Asset',

        );
        return view('karyawan.pengajuan', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'it_asset' => 'required|string',
            'kategori_layanan' => 'required|string',
            'detail_masalah' => 'required|string',
        ]);

        // Simpan ke database (kalau sudah ada model Pengajuan)
        // Pengajuan::create($validated);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan berhasil disubmit!');
    }

    // Fungsi buat nampilin halaman status pengajuan
    public function status()
    {
        // Ambil semua data pengajuan dari database
        $pengajuan = Pengajuan::all();

        return view('karyawan.status', compact('pengajuan'));
    }

}
