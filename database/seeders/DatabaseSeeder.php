<?php

namespace Database\Seeders;

use App\Models\Department;
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
        // User::factory(10)->create();

        // Department::factory()->create([
        //     'name' => 'SDM',
        //     'description' => 'department sumber daya manusia',
        // ]);
        // Department::factory()->create([
        //     'name' => 'Operasional',
        //     'description' => 'department operasional',
        // ]);
        // Department::factory()->create([
        //     'name' => 'Pengembangan Usaha',
        //     'description' => 'department pengembangan usaha',
        // ]);

        // Data department yang akan dimasukkan
        $departments = [
            ['name' => 'Keuangan', 'description' => 'Departemen yang mengelola keuangan perusahaan.'],
            ['name' => 'Sumber Daya Manusia', 'description' => 'Departemen yang mengelola sumber daya manusia.'],
            ['name' => 'IT Support', 'description' => 'Departemen yang memberikan dukungan teknis IT.'],
            ['name' => 'Pemasaran', 'description' => 'Departemen yang bertanggung jawab untuk pemasaran produk.'],
            ['name' => 'Pengembangan Produk', 'description' => 'Departemen yang mengembangkan produk baru.'],
        ];

        // Memasukkan data ke dalam tabel departments
        DB::table('departments')->insert($departments);

        User::factory()->create([
            'name' => 'User Store 2',
            'email' => 'store2@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'store',
            'department_id' => 1,
            'grade' => 2
        ]);
        User::factory()->create([
            'name' => 'User Office 2',
            'email' => 'officedua@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'office',
            'department_id' => 2,
            'grade' => 1,
        ]);
        User::factory()->create([
            'name' => 'User Warehouse 2',
            'email' => 'warehouse2@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'warehouse',
            'department_id' => 1,
            'grade' => 3,
        ]);
        User::factory()->create([
            'name' => 'User Office 3',
            'email' => 'office3@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'office',
            'department_id' => 2,
            'grade' => 3,
        ]);
        User::factory()->create([
            'name' => 'User Warehouse 3',
            'email' => 'warehouse3@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'office',
            'department_id' => 1,
            'grade' => 4,
        ]);
        User::factory()->create([
            'name' => 'User Store 3',
            'email' => 'store3@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'office',
            'department_id' => 2,
            'grade' => 3,
        ]);
    }
}