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
            "beritaAcara"        => BeritaAcara::with('device')->get(),
        );
        return view('beritaAcara', $data);
    }

    public function beritaAcaraPimpinan()
    {
        $data = [
            "title"           => "Berita Acara Layanan IT",
            "menuBeritaAcara" => "active",
            "beritaAcara"     => BeritaAcara::with('device')->get(),
        ];

        return view('pimpinan.BApimpinan', $data);
    }


    public function create(){
        $usedAssetsIds = BeritaAcara::pluck('it_asset_id')->toArray(); // Get all used it_asset_ids

        $data = array(
            'title'             => 'Tambah Data berita Acara',
            'menuBeritaAcara'   => 'active',
            'device'            => Device::whereNotIn('id', $usedAssetsIds)->get(), // Get devices that are not used in Berita Acara
        );
        return view('createBa', $data);
    }

    public function edit($id){
        $beritaAcara = BeritaAcara::with('device')->findOrFail($id);

        $data = array(
            'title'             => 'Edit Data Berita Acara',
            'menuBeritaAcara'   => 'active',
            'beritaAcara'       => $beritaAcara,
        );
        return view('editBa', $data);
    }

    public function update(Request $request, $id)
    {
        $beritaAcara = BeritaAcara::findOrFail($id);

        // Validasi (sementara dikomentari dulu atau bisa di bawah setelah dd)
        $request->validate([

            'user'               => 'required',
            'unit'               => 'required',
            'kategori_layanan'   => 'required',
            'jenis_layanan'      => 'required',
            'detail_pekerjaan'   => 'required',
            'keterangan'         => 'required',
        ],[


            'user.required'               => 'Nama pengguna tidak boleh kosong.',
            'unit.required'               => 'Unit tidak boleh kosong.',
            'kategori_layanan.required'   => 'Kategori layanan tidak boleh kosong.',
            'jenis_layanan.required'      => 'Jenis layanan tidak boleh kosong.',
            'detail_pekerjaan.required'   => 'Detail pekerjaan tidak boleh kosong.',
            'keterangan.required'         => 'Keterangan tidak boleh kosong.',
        ]);

        $beritaAcara = BeritaAcara::findOrFail($id);
        $beritaAcara->user              = $request->user;
        $beritaAcara->unit              = $request->unit;
        $beritaAcara->kategori_layanan = $request->kategori_layanan;
        $beritaAcara->jenis_layanan    = $request->jenis_layanan;
        $beritaAcara->detail_pekerjaan = $request->detail_pekerjaan;
        $beritaAcara->keterangan       = $request->keterangan;
        $beritaAcara->save();

        return redirect()->route('beritaAcara')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $beritaAcara = BeritaAcara::findOrFail($id);
        $beritaAcara->delete();

        return redirect()->route('beritaAcara')->with('success', 'Data berhasil dihapus.');
    }


    public function store(Request $request)
    {

        // Validasi (sementara dikomentari dulu atau bisa di bawah setelah dd)
        $request->validate([
            'it_asset_id'        => 'required|unique:berita_acaras,it_asset_id',
            'user'               => 'required',
            'unit'               => 'required',
            'kategori_layanan'   => 'required',
            'jenis_layanan'      => 'required',
            'detail_pekerjaan'   => 'required',
            'keterangan'         => 'required',
        ],[
            'it_asset_id.required'        => 'ID Aset IT tidak boleh kosong.',
            'it_asset_id.unique'          => 'ID Aset IT sudah digunakan.',
            'user.required'               => 'Nama pengguna tidak boleh kosong.',
            'unit.required'               => 'Unit tidak boleh kosong.',
            'kategori_layanan.required'   => 'Kategori layanan tidak boleh kosong.',
            'jenis_layanan.required'      => 'Jenis layanan tidak boleh kosong.',
            'detail_pekerjaan.required'   => 'Detail pekerjaan tidak boleh kosong.',
            'keterangan.required'         => 'Keterangan tidak boleh kosong.',
        ]);


        $beritaAcara = new BeritaAcara;
        $beritaAcara->it_asset_id       = $request->it_asset_id;
        $beritaAcara->user              = $request->user;
        $beritaAcara->unit              = $request->unit;
        $beritaAcara->kategori_layanan = $request->kategori_layanan;
        $beritaAcara->jenis_layanan    = $request->jenis_layanan;
        $beritaAcara->detail_pekerjaan = $request->detail_pekerjaan;
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
