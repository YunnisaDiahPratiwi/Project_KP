<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = array(
            "title"         => "Dashboard",
            "menuDashboard" => "active",
            "jumlahDevice"  => Device::count(),
            "jumlahBeritaAcara"  => BeritaAcara::count(),
            "jumlahBAPending"  => BeritaAcara::where('status','pending')->count(),
            "jumlahBAProses"  => BeritaAcara::where('status','diproses')->count(),
            "jumlahBASelesai"  => BeritaAcara::where('status','selesai')->count(),
        );
        return view('dashboard', $data);
    }
}
