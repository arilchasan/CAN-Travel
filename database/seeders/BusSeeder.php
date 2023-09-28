<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bus::create([
            'nama_bus' => 'Bus A',
            'tujuan_id' => '1',
            'harga' => '100000',
            'jumlah_kursi' => '50',
        ]);
        Bus::create([
            'nama_bus' => 'Bus B',
            'tujuan_id' => '2',
            'harga' => '100000',
            'jumlah_kursi' => '48',
        ]);
        Bus::create([
            'nama_bus' => 'Bus C',
            'tujuan_id' => '3',
            'harga' => '100000',
            'jumlah_kursi' => '55',
        ]);
        Bus::create([
            'nama_bus' => 'Bus D',
            'tujuan_id' => '4',
            'harga' => '120000',
            'jumlah_kursi' => '60',
        ]);
        Bus::create([
            'nama_bus' => 'Bus E',
            'tujuan_id' => '5',
            'harga' => '120000',
            'jumlah_kursi' => '36',
        ]);
        Bus::create([
            'nama_bus' => 'Bus F',
            'tujuan_id' => '4',
            'harga' => '120000',
            'jumlah_kursi' => '50',
        ]);

    }
}
