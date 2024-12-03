<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Divisi;
use App\Models\StoreUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AreaSeeder::class,
            DivisionSeeder::class,
            DepartmentSeeder::class,
            GradeSeeder::class,
            PositionSeeder::class,
            UserSeeder::class,
            TokoSeeder::class,
            StoreUserSeeder::class,
        ]);
        // User::factory(200)->create();
    }
}
