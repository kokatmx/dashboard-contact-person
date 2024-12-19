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
        // Toko::factory(100)->create();
        Toko::create(['toko_code' => '2MZ1', 'toko_name' => 'DC MADIUN [MDU]', 'no_hp' => '091230890']);
        Toko::create(['toko_code' => '2AJ4', 'toko_name' => 'KEDUNGDOWO REJOSO [MAJI]', 'no_hp' => '091230890']);
        Toko::create(['toko_code' => 'M1M2', 'toko_name' => 'KH. BISIRI [BIBA]', 'no_hp' => '091230890']);
        Toko::create(['toko_code' => 'M662', 'toko_name' => 'RAYA TEMBELANG JMBG [TEBE]', 'no_hp' => '091230890']);
        Toko::create(['toko_code' => 'M766', 'toko_name' => 'NGLOROG SRAGEN [NGOS]', 'no_hp' => '091230890']);
        Toko::create(['toko_code' => '2M62', 'toko_name' => 'MASTRIP TULUNGAGUNG [MTTG]', 'no_hp' => '091230890']);
    }
}