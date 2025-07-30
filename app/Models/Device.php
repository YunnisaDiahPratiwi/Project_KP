<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    // Nama tabel (jika nama tabel kamu bukan plural dari nama model)
    protected $table = 'devices';

    // Kolom-kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'it_asset',
        'ram',
        'storage',
        'processor',
    ];
}
