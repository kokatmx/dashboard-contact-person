<?php

namespace Database\Seeders;

use App\Models\StoreUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreUser::create([
            'user_id' => 1,
            'toko_id' => 1,
        ]);

        StoreUser::create([
            'user_id' => 2,
            'toko_id' => 2,
        ]);

        StoreUser::create([
            'user_id' => 3,
            'toko_id' => 3,
        ]);

        StoreUser::create([
            'user_id' => 4,
            'toko_id' => 4,
        ]);
        StoreUser::create([
            'user_id' => 5,
            'toko_id' => 5,
        ]);

        StoreUser::create([
            'user_id' => 6,
            'toko_id' => 6,
        ]);
        StoreUser::create([
            'user_id' => 11,
            'toko_id' => 1,
        ]);

        StoreUser::create([
            'user_id' => 12,
            'toko_id' => 2,
        ]);
        StoreUser::create([
            'user_id' => 13,
            'toko_id' => 3,
        ]);

        StoreUser::create([
            'user_id' => 14,
            'toko_id' => 4,
        ]);
    }
}
