<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model{
    protected $table = 'berita_acaras';
    protected $fillable = [
        'it_asset_id',
        'user',
        'unit',
        'kategori_layanan',
        'jenis_layanan',
        'detail_pekerjaan',
        'keterangan'
    ];

    public function device(){
        return $this->belongsTo(Device::class, 'it_asset_id');
    }
}

