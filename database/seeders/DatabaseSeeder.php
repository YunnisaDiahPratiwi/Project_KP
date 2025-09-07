<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'      => 'Teknisi',
            'password'  => Hash::make('12345678'),
            'role'      => 'teknisi'
        ]);
        User::create([
            'name'      => 'Pimpinan',
            'password'  => Hash::make('1tbylt25'),
            'role'      => 'pimpinan'
        ]);

        $this->call([
            DeviceSeeder::class,
        ]);

    }
}
