<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Request $request): void
    {
        $areas = [
            ['area_name' => 'Office', 'area_code' => 'OFF'],
            ['area_name' => 'Store', 'area_code' => 'STR'],
            ['area_name' => 'Warehouse', 'area_code' => 'WRH'],
        ];
        foreach ($areas as $areaData) {
            try {
                Area::firstOrCreate([
                    'area_code' => $areaData['area_code'],
                ], [
                    'area_name' => $areaData['area_name'],
                    'slug' => Str::slug($areaData['area_name']),
                ]);
            } catch (\Exception $e) {
                // Log atau beri tahu tentang error
                Log::error('Error saat menyemai area: ' . $e->getMessage());
            }
        }
    }
}
