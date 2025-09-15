<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id', 'it_asset_id', 'kategori_layanan', 'detail_masalah', 'total_hari', 'status'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function getTotalHariAttribute()
    {
        if ($this->tanggal_mulai) {
            $endDate = $this->tanggal_selesai ?? Carbon::now();
            return Carbon::parse($this->tanggal_mulai)->diffInDays($endDate);
        }
        return null;
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'it_asset_id');
    }
}
