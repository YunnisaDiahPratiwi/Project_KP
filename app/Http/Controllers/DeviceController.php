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
}
