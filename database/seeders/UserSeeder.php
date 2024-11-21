<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        // todo: OFFICE
        User::create([
            'name' => 'User A',
            'email' => 'userA@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 1,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User B',
            'email' => 'userB@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 2,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User C',
            'email' => 'userC@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 3,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User D',
            'email' => 'userD@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 4,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User E',
            'email' => 'userE@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 5,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User F',
            'email' => 'userF@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'position_id' => 6,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User G',
            'email' => 'userG@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 2,
            'position_id' => 8,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User H',
            'email' => 'userH@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 2,
            'position_id' => 16,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);




        // todo: STORE
        // buatlah sepertini name => AA, BB, dst
        User::create([
            'name' => 'User AA',
            'email' => 'userAA@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 63,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        // superADMIN superuser => userBB
        User::create([
            'name' => 'User BB',
            'email' => 'userBB@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 9,
            'position_id' => 64,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User CC',
            'email' => 'userCC@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 66,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User DD',
            'email' => 'userDD@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 67,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User EE',
            'email' => 'userEE@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 69,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User FF',
            'email' => 'userFF@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 70,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User GG',
            'email' => 'userGG@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 71,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User HH',
            'email' => 'userHH@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 72,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User II',
            'email' => 'userII@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 73,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User JJ',
            'email' => 'userJJ@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User KK',
            'email' => 'userKK@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 75,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User LL',
            'email' => 'userLL@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 76,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User MM',
            'email' => 'userMM@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 77,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User NN',
            'email' => 'userNN@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User OO',
            'email' => 'userOO@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 63,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User PP',
            'email' => 'userPP@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User QQ',
            'email' => 'userQQ@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 65,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User RR',
            'email' => 'userRR@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 76,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User SS',
            'email' => 'userSS@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 67,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User TT',
            'email' => 'userTT@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 68,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User UU',
            'email' => 'userUU@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 69,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User VV',
            'email' => 'userVV@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 75,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User WW',
            'email' => 'userWW@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 77,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User XX',
            'email' => 'userXX@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 72,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User YY',
            'email' => 'userYY@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'position_id' => 73,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'User ZZ',
            'email' => 'userZZ@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 11,
            'position_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);

        User::create([
            'name' => 'user Branch Manager',
            'email' => 'branch-manager@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 9,
            'position_id' => 62,
            'remember_token' => Str::random(10),
            'no_hp' => '09236619',
        ]);



        // todo: WAREHOUSE
        // name => AAA, BBB, dst
        User::create([
            'name' => 'User AAA',
            'email' => 'userAAA@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 78,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User BBB',
            'email' => 'userBBB@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 79,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User CCC',
            'email' => 'userCCC@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 80,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User DDD',
            'email' => 'userDDD@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 81,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User EEE',
            'email' => 'userEEE@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 82,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User FFF',
            'email' => 'userFFF@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'position_id' => 83,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
    }
}
