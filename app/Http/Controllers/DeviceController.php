<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

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

        Device::create($request->all());

        return redirect()->route('device')->with('success', 'Data perangkat berhasil ditambahkan.');
    }


    public function edit($id){
        $device = Device::findOrFail($id);
        $data = array(
            'title'         => 'Edit Data Perangkat',
            'menuDevice'    => 'active',
            'device'        => $device,
        );
        return view('edit', $data);
    }

        public function update(Request $request, $id){
        $request->validate([
            'it_asset'  => 'required|unique:devices,it_asset, '.$id,
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

        $device = Device::findOrFail($id);
        $device->it_asset  = $request->it_asset;
        $device->ram       = $request->ram;
        $device->storage   = $request->storage;
        $device->processor = $request->processor;
        $device->save();

        return redirect()->route('device')->with('success', 'Data perangkat berhasil diedit.');
    }

    public function destroy($id){
        $device = Device::findOrFail($id);
        $device->delete();

        return redirect()->route('device')->with('success', 'Data perangkat berhasil dihapus.');
    }

    public function excel(){
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new UserExport, 'DataDevices_'.$filename.'.xlsx');
    }

    public function pdf(){
        $filename = now()->format('d-m-Y_H.i.s');
        $data = array(
            'device'    =>  Device::get(),
        );
        $pdf = Pdf::loadView('devicePdf', $data);
        return $pdf->stream('DataDevices_'.$filename.'.pdf');
    }
}
