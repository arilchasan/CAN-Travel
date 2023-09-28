<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tujuan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Tujuan::create([
            'kode' => '1',
            'kota_asal' => 'Bandung',
            'kota_tujuan' => 'Jakarta',
        ]);

        Tujuan::create([
            'kode' => '2',
            'kota_asal' => 'Surabaya',
            'kota_tujuan' => 'Malang',
        ]);

        Tujuan::create([
            'kode' => '3',
            'kota_asal' => 'Semarang',
            'kota_tujuan' => 'Yogyakarta',
        ]);

        Tujuan::create([
            'kode' => '4',
            'kota_asal' => 'Kudus',
            'kota_tujuan' => 'Semarang',
        ]);

        Tujuan::create([
            'kode' => '5',
            'kota_asal' => 'Bali',
            'kota_tujuan' => 'Lombok',
        ]);
        
        $this->call(AdminSeeder::class);
        $this->call(BusSeeder::class);

    }
}
