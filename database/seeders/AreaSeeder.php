<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            'area_code' => 'OFFICE',
            'area_name' => 'Office',
        ]);
        Area::create([
            'area_code' => 'STORE',
            'area_name' => 'Store',
        ]);
        Area::create([
            'area_code' => 'WAREHOUSE',
            'area_name' => 'Warehouse',
        ]);
    }
}
