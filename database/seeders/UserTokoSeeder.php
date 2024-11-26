<?php

namespace Database\Seeders;

use App\Models\UserToko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserToko::create([
            'user_id' => 1,
            'toko_id' => 1,
        ]);

        UserToko::create([
            'user_id' => 2,
            'toko_id' => 2,
        ]);

        UserToko::create([
            'user_id' => 3,
            'toko_id' => 3,
        ]);

        UserToko::create([
            'user_id' => 4,
            'toko_id' => 4,
        ]);
        UserToko::create([
            'user_id' => 5,
            'toko_id' => 5,
        ]);

        UserToko::create([
            'user_id' => 6,
            'toko_id' => 6,
        ]);
        UserToko::create([
            'user_id' => 11,
            'toko_id' => 1,
        ]);

        UserToko::create([
            'user_id' => 12,
            'toko_id' => 2,
        ]);
        UserToko::create([
            'user_id' => 13,
            'toko_id' => 3,
        ]);

        UserToko::create([
            'user_id' => 14,
            'toko_id' => 4,
        ]);
    }
}
