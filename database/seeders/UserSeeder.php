<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // office masih kurang banyak
        User::create([
            'name' => 'User A',
            'email' => 'userA@example.com',
            'password' => Hash::make('1234567890'),
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 1,
        ]);
        User::create([
            'name' => 'User B',
            'email' => 'userB@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 2,
        ]);
        User::create([
            'name' => 'User C',
            'email' => 'userC@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
        ]);
        User::create([
            'name' => 'User Q',
            'email' => 'userQ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
        ]);
        User::create([
            'name' => 'User R',
            'email' => 'userR@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
        ]);
        User::create([
            'name' => 'User D',
            'email' => 'userD@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User M',
            'email' => 'userM@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User N',
            'email' => 'userN@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User O',
            'email' => 'userO@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User P',
            'email' => 'userP@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User S',
            'email' => 'userS@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User T',
            'email' => 'userT@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User U',
            'email' => 'userU@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User V',
            'email' => 'userV@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User W',
            'email' => 'userW@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User X',
            'email' => 'userX@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User Y',
            'email' => 'userY@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        User::create([
            'name' => 'User Z',
            'email' => 'userZ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
        ]);
        // store
        User::create([
            'name' => 'User E',
            'email' => 'userE@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 70,
        ]);
        User::create([
            'name' => 'User F',
            'email' => 'userF@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 11,
            'grade_id' => 77,
        ]);
        User::create([
            'name' => 'User G',
            'email' => 'userG@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 75,
        ]);
        User::create([
            'name' => 'User H',
            'email' => 'userH@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 68,
        ]);

        // warehouse
        User::create([
            'name' => 'User I',
            'email' => 'userI@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 90,
        ]);
        User::create([
            'name' => 'User J',
            'email' => 'userJ@example.com',
            'password' => Hash::make('1234567890'),
            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 99,
        ]);
        User::create([
            'name' => 'User K',
            'email' => 'userK@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 109,
        ]);
        User::create([
            'name' => 'User L',
            'email' => 'userL@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 111,
        ]);
    }
}
