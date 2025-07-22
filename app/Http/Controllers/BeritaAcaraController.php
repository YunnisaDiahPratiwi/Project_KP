<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    public function beritaAcara(){
        $data = array(
            "title"              => "Berita Acara Layanan IT",
            "menuBeritaAcara"    => "active"
        );
        return view('beritaAcara', $data);
    }
}
