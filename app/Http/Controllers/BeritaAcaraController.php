<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    public function beritaAcara(){
        $data = array(
            "title"              => "Berita Acara Layanan IT",
            "menuBeritaAcara"    => "active",
            "beritaAcara"        => BeritaAcara::with('device')->get(), // Assuming 'device' is the relationship defined in the BeritaAcara model
        );
        return view('beritaAcara', $data);
    }
}
