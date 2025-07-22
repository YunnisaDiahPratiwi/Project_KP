<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function device(){
        $data = array(
            "title"         => "Data Perangkat",
            "menuDevice"    => "active"
        );
        return view('device', $data);
    }
}
