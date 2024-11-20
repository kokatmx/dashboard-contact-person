<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use Illuminate\Support\Str;
>>>>>>> dev

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
<<<<<<< HEAD
    public function run(): void
    {
        Area::create([
            'area_name' => 'Central Warehouse',
            'department_id' => 2, // ID dari Warehouse Department
        ]);
    }
}
=======
    public function run(Request $request): void
    {
        $areas = [
            ['area_name' => 'Office', 'area_code' => 'OFF'],
            ['area_name' => 'Store', 'area_code' => 'STR'],
            ['area_name' => 'Warehouse', 'area_code' => 'WRH'],
        ];
        foreach ($areas as $areaData) {
            Area::create([
                'area_name' => $areaData['area_name'],
                'area_code' => $areaData['area_code'],
                'slug' => Str::slug($areaData['area_name']), // Generate slug based on area name for SEO purposes
            ]);
        }
    }
}
>>>>>>> dev
