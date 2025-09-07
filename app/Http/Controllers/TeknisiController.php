<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    // Tampilkan pengajuan baru di dashboard teknisi (status = pending)
    public function pengajuanBaru()
    {
        $data = [
            'title'      => 'Pengajuan Baru',
            'pengajuans' => Pengajuan::with('karyawan')
                                ->where('status', 'pending')
                                ->get(),
        ];

        return view('dashboard', $data);
        // langsung pake dashboard.blade.php kamu
    }

    // Tampilkan semua daftar pengajuan (teknisi)
    public function daftarPengajuan()
    {
        $data = [
            'title'      => 'Daftar Pengajuan',
            'pengajuans' => Pengajuan::with('karyawan')->get(),
        ];

        return view('daftarPengajuan', $data);
    }
    // public function daftarPengajuanPimpinan()
    // {
    //     $data = [
    //         'title'      => 'Daftar Pengajuan',
    //         'pengajuans' => Pengajuan::with('karyawan')->get(),
    //     ];

    //     return view('pimpinan.daftarPengajuanPimpinan', $data);
    // }

    // Update status pengajuan (pending → diproses / selesai)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->status;
        $pengajuan->save();

        return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}
