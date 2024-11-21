<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data to toko table
        Toko::create([
            'nama_toko' => 'Toko A',
            'alamat' => 'Jln. Jalan 1 No. 1',
            'no_telp' => '081234567890',
        ]);

        Toko::create([
            'nama_toko' => 'Toko B',
            'alamat' => 'Jln. Jalan 2 No. 2',
            'no_telp' => '089876543210',
        ]);
    }
}
