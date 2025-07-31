<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\BeritaAcaraExport;
use Maatwebsite\Excel\Facades\Excel;

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
    public function create(){
        $data = array(
            'title'             => 'Tambah Data berita Acara',
            'menuBeritaAcara'    => 'active',
            'device'            => Device::get(),
        );
        return view('createBa', $data);
    }


    public function store(Request $request)
    {

        // Validasi (sementara dikomentari dulu atau bisa di bawah setelah dd)
        $request->validate([
            'it_asset_id'        => 'required',
            'user'               => 'required',
            'unit'               => 'required',
            'kategori_layanan'   => 'required',
            'jenis_layanan'      => 'required',
            'detail_pekerjaan'   => 'required',
            'status'             => 'required',
            'keterangan'         => 'required',
        ]);

        $beritaAcara = new BeritaAcara;
        $beritaAcara->it_asset_id       = $request->it_asset_id;
        $beritaAcara->user              = $request->user;
        $beritaAcara->unit              = $request->unit;
        $beritaAcara->kategori_layanan = $request->kategori_layanan;
        $beritaAcara->jenis_layanan    = $request->jenis_layanan;
        $beritaAcara->detail_pekerjaan = $request->detail_pekerjaan;
        $beritaAcara->status           = $request->status;
        $beritaAcara->keterangan       = $request->keterangan;
        $beritaAcara->save();

        return redirect()->route('beritaAcara')->with('success', 'Data berhasil ditambahkan.');
    }

    public function excel(){
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new BeritaAcaraExport, 'DataBeritaAcara_'.$filename.'.xlsx');
    }

    public function pdf(){
        $filename = now()->format('d-m-Y_H.i.s');
        $data = array(
            'beritaAcara'    =>  BeritaAcara::with('device')->get(),
        );
        $pdf = Pdf::loadView('beritaAcaraPdf', $data);
        return $pdf->setPaper('a4','landscape')->stream('DataBeritaAcara_'.$filename.'.pdf');
    }

}
