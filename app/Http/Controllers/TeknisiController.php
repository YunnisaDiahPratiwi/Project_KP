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

    // public function updateStatus(Request $request, $id)
    // {
    //     $request->validate([
    //         'status' => 'required|in:pending,diproses,selesai',
    //     ]);

    //     $pengajuan = Pengajuan::findOrFail($id);
    //     $pengajuan->status = $request->status;
    //     $pengajuan->save();

    //     return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    // }

    // public function updateStatus(Request $request, $id)
    // {
    //     $request->validate([
    //         'status' => 'required|in:pending,diproses,selesai',
    //     ]);

    //     $pengajuan = Pengajuan::findOrFail($id);

    //     if ($request->status === 'diproses' && $pengajuan->tanggal_mulai === null) {
    //         $pengajuan->tanggal_mulai = now();
    //     }

    //     if ($request->status === 'selesai' && $pengajuan->tanggal_selesai === null) {
    //         $pengajuan->tanggal_selesai = now();
    //     }

    //     $pengajuan->status = $request->status;
    //     $pengajuan->save();

    //     return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    // }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);

        // kalau baru diproses, catat tanggal mulai
        if ($request->status === 'diproses' && $pengajuan->tanggal_mulai === null) {
            $pengajuan->tanggal_mulai = now();
        }

        // kalau selesai, catat tanggal selesai + hitung total hari
        if ($request->status === 'selesai' && $pengajuan->tanggal_selesai === null) {
            $pengajuan->tanggal_selesai = now();

            if ($pengajuan->tanggal_mulai !== null) {
                $pengajuan->total_hari = $pengajuan->tanggal_mulai->diffInDays($pengajuan->tanggal_selesai);
            } else {
                $pengajuan->total_hari = 0;
            }
        }

        $pengajuan->status = $request->status;
        $pengajuan->save();

        return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }


}
