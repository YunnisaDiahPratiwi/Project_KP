<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Pengajuan;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // public function index(){
    //     $data = array(
    //         "title"             => "Dashboard",
    //         "menuDashboard"     => "active",
    //         "jumlahDevice"      => Device::count(),
    //         "jumlahBeritaAcara" => BeritaAcara::count(),
    //         "jumlahBAPending"   => BeritaAcara::where('status','pending')->count(),
    //         "jumlahBAProses"    => BeritaAcara::where('status','diproses')->count(),
    //         "jumlahBASelesai"   => BeritaAcara::where('status','selesai')->count(),

    //         // hanya ambil pengajuan baru (status pending)
    //         "pengajuans"        => Pengajuan::with('karyawan')
    //                                     ->where('status', 'pending')
    //                                     ->get(),

    //         // "pengajuans" => Pengajuan::with('karyawan')->latest()->get(),

    //     );

    //     return view('dashboard', $data);
    // }

    public function index(){
        $data = array(
            "title"             => "Dashboard",
            "menuDashboard"     => "active",

            // Device
            "jumlahDevice"      => Device::count(),

            // Berita Acara
            "jumlahBeritaAcara" => BeritaAcara::count(),
            "jumlahBAPending"   => BeritaAcara::where('status','pending')->count(),
            "jumlahBAProses"    => BeritaAcara::where('status','diproses')->count(),
            "jumlahBASelesai"   => BeritaAcara::where('status','selesai')->count(),

            // Pengajuan
            "jumlahPengajuan"        => Pengajuan::count(),
            "jumlahPengajuanBaru"    => Pengajuan::where('status','pending')->count(),
            "jumlahPengajuanProses"  => Pengajuan::where('status','diproses')->count(),
            "jumlahPengajuanSelesai" => Pengajuan::where('status','selesai')->count(),

            // list pengajuan baru + relasi karyawan
            "pengajuans"        => Pengajuan::with('karyawan')
                                        ->where('status', 'pending')
                                        ->get(),
        );

        return view('dashboard', $data);
    }

}
