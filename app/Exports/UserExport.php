<?php

namespace App\Exports;

use App\Models\Device;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class userExport implements FromView
{
    public function view(): View
    {
        $data = array(
            'device'    =>  Device::get(),
        );
        return view('deviceExcel', $data);
    }
}
