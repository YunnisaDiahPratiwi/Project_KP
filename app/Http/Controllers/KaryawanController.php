<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Auth::guard('karyawan')->user(); // ambil data karyawan yang login

        $data = array(
            "title"   => "Pengajuan Perangkat Bermasalah",
            "karyawan" => $karyawan, // kirim ke view
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

        // Tambahin info karyawan biar nyambung ke tabel pengajuans
        $validated['karyawan_id'] = Auth::guard('karyawan')->id();

        Pengajuan::create($validated);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan berhasil disubmit!');
    }

    // Fungsi buat nampilin halaman status pengajuan
    public function status()
    {
        $karyawan = Auth::guard('karyawan')->user();

        // ambil hanya pengajuan milik karyawan yang login
        $pengajuan = Pengajuan::where('karyawan_id', $karyawan->id)->get();

        return view('karyawan.status', compact('pengajuan'));
    }

    public function daftarPengajuan()
    {
        $data = array(
            'title'                 => 'Daftar Pengajuan',
            'menuDaftarPengajuan'   => 'active',
            'pengajuans'            => Pengajuan::all(), // ambil semua data dari tabel pengajuans
        );

        return view('daftarPengajuan', $data); // nama file view harus sesuai (lowercase)
    }

}
