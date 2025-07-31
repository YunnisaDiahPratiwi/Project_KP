<?php

namespace App\Exports;

use App\Models\BeritaAcara;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraExport implements FromView
{
    public function view(): View
    {
        $data = array(
            'beritaAcara'    =>  BeritaAcara::with('device')->get(),
        );
        return view('beritaAcaraExcel', $data);
    }
}
