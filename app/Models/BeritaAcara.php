<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model{
     public function device(){
        return $this->belongsTo(Device::class, 'it_asset_id');
    }
}

