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
            'description' => 'IT Branch'
        ]);
        Department::create([
            'department_code' => 'F1500',
            'department_name' => 'FINANCE ACCOUNTING (BRANCH)',
            'description' => 'FINANCE ACCOUNTING (BRANCH)'
        ]);
        Department::create([
            'department_code' => 'F5100',
            'department_name' => 'Inventory Control',
            'description' => 'Inventory Control'
        ]);
        Department::create([
            'department_code' => 'G1600',
            'department_name' => 'BRANCH CORPORATE AFFAIRS',
            'description' => 'BRANCH CORPORATE AFFAIRS'
        ]);
        Department::create([
            'department_code' => 'H1800',
            'department_name' => 'BRANCH GENERAL SERVICE',
            'description' => 'BRANCH GENERAL SERVICE'
        ]);
        Department::create([
            'department_code' => 'H2600',
            'department_name' => 'BRANCH PEOPLE DEVELOPMENT',
            'description' => 'BRANCH PEOPLE DEVELOPMENT'
        ]);
        Department::create([
            'department_code' => 'K1300',
            'department_name' => 'BRANCH MARKETING',
            'description' => 'BRANCH MARKETING'
        ]);
        Department::create([
            'department_code' => 'M3200',
            'department_name' => 'BRANCH MERCHANDISING',
            'description' => 'IBRANCH MERCHANDISING'
        ]);
        Department::create([
            'department_code' => 'O1100',
            'department_name' => 'Branch Manager/ Deputy Branch manager',
            'description' => 'Branch Manager/ Deputy Branch manager'
        ]);
        Department::create([
            'department_code' => 'O1200',
            'department_name' => 'Area',
            'description' => 'Area'
        ]);
        Department::create([
            'department_code' => 'O9400',
            'department_name' => 'TASK FORCE',
            'description' => 'TASK FORCE'
        ]);
        Department::create([
            'department_code' => 'O1900',
            'department_name' => 'BRANCH WAREHOUSETASK',
            'description' => 'BRANCH WAREHOUSE'
        ]);
        Department::create([
            'department_code' => 'R4300',
            'department_name' => 'BRANCH FRANCHISE RELATION',
            'description' => 'BRANCH FRANCHISE RELATION'
        ]);
        Department::create([
            'department_code' => 'R5800',
            'department_name' => 'BRANCH FRANCHISE TAF ADMIN',
            'description' => 'BBRANCH FRANCHISE TAF ADMIN'
        ]);
        Department::create([
            'department_code' => 'YY002',
            'department_name' => 'BRANCH LOCATION & DEVELOPMENT',
            'description' => 'BRANCH LOCATION & DEVELOPMENT'
        ]);
    }
}
