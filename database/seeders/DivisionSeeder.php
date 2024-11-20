<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'division_code' => 'C0000',
            'division_name' => 'INFORMATION TECHNOLOGY',
<<<<<<< HEAD
=======
            'area_id' => 1,
>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'F0000',
            'division_name' => 'FINANCE',
<<<<<<< HEAD
=======
            'area_id' => 1,
>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'G0000',
            'division_name' => 'CORPORATE AFFAIRS',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'H0000',
            'division_name' => 'HUMAN CAPITAL',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'K0000',
            'division_name' => 'MAREKTING',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'M0000',
            'division_name' => 'MERCHANDISING',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'O0000',
            'division_name' => 'OPERATION',
<<<<<<< HEAD
=======
            'area_id' => 2,
>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'O2222',
            'division_name' => 'LOGISTIC',
<<<<<<< HEAD
=======
            'area_id' => 3,
>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'R0000',
            'division_name' => 'FRANCHISE',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
        Division::create([
            'division_code' => 'YY000',
            'division_name' => 'PROPERTY & DEVELOPMENT',
<<<<<<< HEAD
=======
            'area_id' => 1,

>>>>>>> dev
        ]);
    }
}
