<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'department_code' => 'C3100',
            'department_name' => 'IT Branch',
            'department_extension' => '81121',
            'division_id' => 1,
            'area_id' => 1,

        ]);
        Department::create([
            'department_code' => 'F1500',
            'department_name' => 'FINANCE ACCOUNTING (BRANCH)',
            'department_extension' => '81122',
            'division_id' => 2,
            'area_id' => 1,

        ]);
        Department::create([
            'department_code' => 'F5100',
            'department_name' => 'Inventory Control',
            'department_extension' => '81123',
            'division_id' => 2,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'G1600',
            'department_name' => 'BRANCH CORPORATE AFFAIRS',
            'department_extension' => '81124',
            'division_id' => 3,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'H1800',
            'department_name' => 'BRANCH GENERAL SERVICE',
            'department_extension' => '81125',
            'division_id' => 4,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'H2600',
            'department_name' => 'BRANCH PEOPLE DEVELOPMENT',
            'department_extension' => '81126',
            'division_id' => 4,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'K1300',
            'department_name' => 'BRANCH MARKETING',
            'department_extension' => '81127',
            'division_id' => 5,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'M3200',
            'department_name' => 'BRANCH MERCHANDISING',
            'department_extension' => '81128',
            'division_id' => 6,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'O1100',
            'department_name' => 'Branch Manager/ Deputy Branch manager',
            'department_extension' => '81200',
            'division_id' => 7,
            'area_id' => 2,


        ]);
        Department::create([
            'department_code' => 'O1200',
            'department_name' => 'Area',
            'department_extension' => '81129',
            'division_id' => 7,
            'area_id' => 2,


        ]);
        Department::create([
            'department_code' => 'O9400',
            'department_name' => 'TASK FORCE',
            'department_extension' => '81130',
            'division_id' => 7,
            'area_id' => 2,


        ]);
        Department::create([
            'department_code' => 'O1900',
            'department_name' => 'BRANCH WAREHOUSETASK',
            'department_extension' => '81131',
            'division_id' => 8,
            'area_id' => 3,


        ]);
        Department::create([
            'department_code' => 'R4300',
            'department_name' => 'BRANCH FRANCHISE RELATION',
            'department_extension' => '81132',
            'division_id' => 9,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'R5800',
            'department_name' => 'BRANCH FRANCHISE TAF ADMIN',
            'department_extension' => '81133',
            'division_id' => 9,
            'area_id' => 1,


        ]);
        Department::create([
            'department_code' => 'YY002',
            'department_name' => 'BRANCH LOCATION & DEVELOPMENT',
            'department_extension' => '81134',
            'division_id' => 10,
            'area_id' => 1,

        ]);

        Department::create([
            'department_code' => 'YY004',
            'department_name' => 'BRANCH BUILDING & MAINTENANCE',
            'department_extension' => '81135',
            'division_id' => 10,
            'area_id' => 1,

        ]);
    }
}
