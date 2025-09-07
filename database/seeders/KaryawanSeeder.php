<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'divisi' => 'Dokumen',
            'nama' => 'Rama',
            'password' => Hash::make('51255')
        ]);
        Karyawan::create([
            'divisi' => 'Perencanaan',
            'nama' => 'Imam',
            'password' => Hash::make('51356')
        ]);
        Karyawan::create([
            'divisi' => 'Produksi',
            'nama' => 'Kosim',
            'password' => Hash::make('51457')
        ]);
        Karyawan::create([
            'divisi' => 'Quality Control',
            'nama' => 'Yudi',
            'password' => Hash::make('51558')
        ]);
        Karyawan::create([
            'divisi' => 'Logistik',
            'nama' => 'Supriadi',
            'password' => Hash::make('51659')
        ]);
        Karyawan::create([
            'divisi' => 'Pengadaan Barang dan Jasa',
            'nama' => 'Edi',
            'password' => Hash::make('51760')
        ]);
        Karyawan::create([
            'divisi' => 'Keuangan',
            'nama' => 'Citra',
            'password' => Hash::make('51861')
        ]);
        Karyawan::create([
            'divisi' => 'SDM',
            'nama' => 'Agus',
            'password' => Hash::make('51962')
        ]);
    }
}
