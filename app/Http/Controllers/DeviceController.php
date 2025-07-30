<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function device(){
        $data = array(
            'title'         => 'Data Perangkat',
            'menuDevice'    => 'active',
            'devices'        => Device::all(),
        );
        return view('device', $data);
    }
    public function createDevice(){
        $data = array(
            'title'         => 'Tambah Data Perangkat',
            'menuDevice'    => 'active',
        );
        return view('createDevice', $data);
    }
    public function store(Request $request){
        $request->validate([
            'it_asset'  => 'required|unique:devices,it_asset',
            'ram'       => 'required',
            'storage'   => 'required',
            'processor' => 'required',
        ],
        [
            'it_asset.required'  => 'IT Asset tidak boleh kosong.',
            'it_asset.unique'    => 'IT Asset sudah ada.',
            'ram.required'       => 'RAM tidak boleh kosong.',
            'storage.required'   => 'Storage tidak boleh kosong.',
            'processor.required' => 'Processor tidak boleh kosong.',
        ]);

        return redirect()->route('device')->with('success', 'Data perangkat berhasil ditambahkan.');
    }
}
