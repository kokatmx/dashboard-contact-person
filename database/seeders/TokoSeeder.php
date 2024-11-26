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
            'toko_code' => 'AT001',
            'toko_name' => 'Toko 1',
            'position_id' => '150',
        ]);

        Toko::create([
            'toko_code' => 'AT002',
            'toko_name' => 'Toko 2',
            'position_id' => '150',
        ]);

        Toko::create([
            'toko_code' => 'AT003',
            'toko_name' => 'Toko 3',
            'position_id' => '151',
        ]);

        Toko::create([
            'toko_code' => 'AT004',
            'toko_name' => 'Toko 4',
            'position_id' => '151',
        ]);

        Toko::create([
            'toko_code' => 'AT005',
            'toko_name' => 'Toko 5',
            'position_id' => '152',
        ]);

        Toko::create([
            'toko_code' => 'AT006',
            'toko_name' => 'Toko 6',
            'position_id' => '152',
        ]);
    }
}
