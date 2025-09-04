<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Karyawan extends Authenticatable
{
    use Notifiable;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'divisi',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
