<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::create([
            'it_asset'  => 'IT.001.0118.1.Y060.00001',
            'ram'       => '8 GB',
            'storage'   => '512 GB SSD',
            'processor' => 'Intel Core i5',
        ]);

        Device::create([
            'it_asset'  => 'IT.001.0118.1.Y060.00002',
            'ram'       => '16 GB',
            'storage'   => '1 TB HDD',
            'processor' => 'Intel Core i7',
        ]);
    }
}
