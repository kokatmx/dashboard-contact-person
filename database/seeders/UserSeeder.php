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
<<<<<<< HEAD
        // todo:
        // !! OFFICE
        // office masih kurang banyak
=======
        // todo: OFFICE
>>>>>>> dev
        User::create([
            'name' => 'User A',
            'email' => 'userA@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD
=======
            'area_id' => 1,
>>>>>>> dev
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 1,
            'remember_token' => Str::random(10),
<<<<<<< HEAD
            'no_hp' => '0987654321',
=======
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);
        User::create([
            'name' => 'User B',
            'email' => 'userB@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 23,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654322',
=======
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 2,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);
        User::create([
            'name' => 'User C',
            'email' => 'userC@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654323',
        ]);
        User::create([
            'name' => 'User Q',
            'email' => 'userQ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654324',
        ]);
        User::create([
            'name' => 'User R',
            'email' => 'userR@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 3,
            'grade_id' => 24,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654325',

=======
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 3,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);
        User::create([
            'name' => 'User D',
            'email' => 'userD@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654326',

        ]);
        User::create([
            'name' => 'User M',
            'email' => 'userM@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654327',

        ]);
        User::create([
            'name' => 'User N',
            'email' => 'userN@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654328',

        ]);
        User::create([
            'name' => 'User O',
            'email' => 'userO@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654329',

        ]);
        User::create([
            'name' => 'User P',
            'email' => 'userP@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654366',

        ]);
        User::create([
            'name' => 'User S',
            'email' => 'userS@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654321',

        ]);
        User::create([
            'name' => 'User T',
            'email' => 'userT@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 16,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654388',

        ]);
        User::create([
            'name' => 'User U',
            'email' => 'userU@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654344',

        ]);
        User::create([
            'name' => 'User V',
            'email' => 'userV@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654543',

        ]);
        User::create([
            'name' => 'User W',
            'email' => 'userW@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654567',

        ]);
        User::create([
            'name' => 'User X',
            'email' => 'userX@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 12,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654675',

        ]);

=======
            'area_id' => 1,
            'division_id' => 1,
            'department_id' => 1,
            'grade_id' => 4,
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
            'grade_id' => 5,
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
            'grade_id' => 6,
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
            'grade_id' => 8,
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
            'grade_id' => 16,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);




        // todo: STORE
        // buatlah sepertini name => AA, BB, dst
>>>>>>> dev
        User::create([
            'name' => 'User AA',
            'email' => 'userAA@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 2,
            'department_id' => 7,
            'grade_id' => 146,
            'remember_token' => Str::random(10),
            'no_hp' => '098765455',

        ]);

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 63,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        // superADMIN superuser => userBB
>>>>>>> dev
        User::create([
            'name' => 'User BB',
            'email' => 'userBB@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 2,
            'department_id' => 5,
            'grade_id' => 143,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654777',

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 9,
            'grade_id' => 62,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User CC',
            'email' => 'userCC@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 3,
            'department_id' => 4,
            'grade_id' => 63,
            'remember_token' => Str::random(10),
            'no_hp' => '09876543098',

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 66,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User DD',
            'email' => 'userDD@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 4,
            'department_id' => 5,
            'grade_id' => 63,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654540',

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 67,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User EE',
            'email' => 'userEE@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 5,
            'department_id' => 6,
            'grade_id' => 62,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654656',

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 69,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User FF',
            'email' => 'userFF@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 3,
            'department_id' => 7,
            'grade_id' => 61,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654744',

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 70,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User GG',
            'email' => 'userGG@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 4,
            'department_id' => 6,
            'grade_id' => 60,
            'remember_token' => Str::random(10),
            'no_hp' => '09876544322',

        ]);

        User::create([
            'name' => 'User H1',
            'email' => 'userH1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 6,
            'department_id' => 7,
            'grade_id' => 59,
            'remember_token' => Str::random(10),
            'no_hp' => '0895367110443',

        ]);

        User::create([
            'name' => 'User II',
            'email' => 'userII@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 9,
            'grade_id' => 58,
            'remember_token' => Str::random(10),
            'no_hp' => '089766577488',

        ]);

        User::create([
            'name' => 'User J1',
            'email' => 'userJ1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 8,
            'grade_id' => 57,
            'remember_token' => Str::random(10),
            'no_hp' => '08976655443',

        ]);

        User::create([
            'name' => 'User KK',
            'email' => 'userKK@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 9,
            'grade_id' => 56,
            'remember_token' => Str::random(10),
            'no_hp' => '08976896443',

        ]);

        User::create([
            'name' => 'User LL',
            'email' => 'userLL@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 8,
            'grade_id' => 55,
            'remember_token' => Str::random(10),
            'no_hp' => '088997665544',

        ]);

        User::create([
            'name' => 'User MM',
            'email' => 'userMM@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 5,
            'grade_id' => 54,
            'remember_token' => Str::random(10),
            'no_hp' => '0897657784',

        ]);

        User::create([
            'name' => 'User NN',
            'email' => 'userNN@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 5,
            'department_id' => 8,
            'grade_id' => 53,
            'remember_token' => Str::random(10),
            'no_hp' => '08976688564',

        ]);

        User::create([
            'name' => 'User OO',
            'email' => 'userOO@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 9,
            'grade_id' => 52,
            'remember_token' => Str::random(10),
            'no_hp' => '078899665774',

        ]);

        User::create([
            'name' => 'User PP',
            'email' => 'userPP@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 6,
            'grade_id' => 51,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654321897',

        ]);

        User::create([
            'name' => 'User QQ',
            'email' => 'userQQ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 5,
            'department_id' => 8,
            'grade_id' => 50,
            'remember_token' => Str::random(10),
            'no_hp' => '09876576761',

        ]);

        User::create([
            'name' => 'User RR',
            'email' => 'userRR@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 6,
            'department_id' => 9,
            'grade_id' => 49,
            'remember_token' => Str::random(10),
            'no_hp' => '08779654589',

        ]);

        User::create([
            'name' => 'User SS',
            'email' => 'userSS@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 7,
            'grade_id' => 48,
            'remember_token' => Str::random(10),
            'no_hp' => '08997665890',

        ]);

        User::create([
            'name' => 'User TT',
            'email' => 'userTT@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 5,
            'grade_id' => 47,
            'remember_token' => Str::random(10),
            'no_hp' => '08456708098',

        ]);

        User::create([
            'name' => 'User UU',
            'email' => 'userUU@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 5,
            'department_id' => 6,
            'grade_id' => 46,
            'remember_token' => Str::random(10),
            'no_hp' => '7689095098',
        ]);

        User::create([
            'name' => 'User VV',
            'email' => 'userVV@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 5,
            'department_id' => 6,
            'grade_id' => 45,
            'remember_token' => Str::random(10),
            'no_hp' => '0987654399',
        ]);

        User::create([
            'name' => 'User WW',
            'email' => 'userWW@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 2,
            'grade_id' => 44,
            'remember_token' => Str::random(10),
            'no_hp' => '09876547781',

        ]);

        User::create([
            'name' => 'User XX',
            'email' => 'userXX @example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 5,
            'grade_id' => 43,
            'remember_token' => Str::random(10),
            'no_hp' => '09876576540',

        ]);

        User::create([
            'name' => 'User YY',
            'email' => 'userYY@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 4,
            'grade_id' => 42,
            'remember_token' => Str::random(10),
            'no_hp' => '09876540998',

        ]);

        User::create([
            'name' => 'User ZZ',
            'email' => 'userZZ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 6,
            'grade_id' => 41,
            'remember_token' => Str::random(10),
            'no_hp' => '098766749863',

        ]);

        User::create([
            'name' => 'User AB',
            'email' => 'userAB@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 4,
            'grade_id' => 40,
            'remember_token' => Str::random(10),
            'no_hp' => '0987675936398',

        ]);

        User::create([
            'name' => 'User AC',
            'email' => 'userAC@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 6,
            'department_id' => 5,
            'grade_id' => 39,
            'remember_token' => Str::random(10),
            'no_hp' => '09876547866',
        ]);

        User::create([
            'name' => 'User AD',
            'email' => 'userAD@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 38,
            'remember_token' => Str::random(10),
            'no_hp' => '0987689670',

        ]);

        User::create([
            'name' => 'User AE',
            'email' => 'userAE@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 8,
            'grade_id' => 37,
            'remember_token' => Str::random(10),
            'no_hp' => '098765097886',
        ]);

        User::create([
            'name' => 'User BA',
            'email' => 'userBA@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 9,
            'grade_id' => 36,
            'remember_token' => Str::random(10),
            'no_hp' => '098765499007',
        ]);

        User::create([
            'name' => 'User BD',
            'email' => 'userBD@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 35,
            'remember_token' => Str::random(10),
            'no_hp' => '09876549980',
        ]);

        User::create([
            'name' => 'User BC',
            'email' => 'userBC@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 34,
            'remember_token' => Str::random(10),
            'no_hp' => '098765430998',
        ]);

        User::create([
            'name' => 'User BE',
            'email' => 'userBE@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 6,
            'grade_id' => 33,
            'remember_token' => Str::random(10),
            'no_hp' => '09876543098',
        ]);

        User::create([
            'name' => 'User BF',
            'email' => 'userBF@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 7,
            'grade_id' => 32,
            'remember_token' => Str::random(10),
            'no_hp' => '098765490086',
        ]);

        User::create([
            'name' => 'User BG',
            'email' => 'userBG@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 6,
            'grade_id' => 31,
            'remember_token' => Str::random(10),
            'no_hp' => '098765877665',
        ]);

        User::create([
            'name' => 'User BH',
            'email' => 'userBH@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 30,
            'remember_token' => Str::random(10),
            'no_hp' => '098766775445',
        ]);

        User::create([
            'name' => 'User BI',
            'email' => 'userBI@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 121,
            'remember_token' => Str::random(10),
            'no_hp' => '09876543210',
        ]);

        User::create([
            'name' => 'User BJ',
            'email' => 'userBJ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 7,
            'grade_id' => 122,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432108',
        ]);

        User::create([
            'name' => 'User BK',
            'email' => 'userBK@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 6,
            'grade_id' => 123,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432122',
        ]);

        User::create([
            'name' => 'User BL',
            'email' => 'userBL@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 7,
            'grade_id' => 124,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432100',
        ]);

        User::create([
            'name' => 'User BM',
            'email' => 'userBM@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 5,
            'department_id' => 7,
            'grade_id' => 125,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432187',
        ]);

        User::create([
            'name' => 'User BN',
            'email' => 'userBN@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 5,
            'grade_id' => 126,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432103',
        ]);

        User::create([
            'name' => 'User BO',
            'email' => 'userBO@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 5,
            'grade_id' => 127,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432134',
        ]);

        User::create([
            'name' => 'User BP',
            'email' => 'userBP@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 7,
            'grade_id' => 128,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432188',
        ]);

        User::create([
            'name' => 'User BQ',
            'email' => 'userBQ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 4,
            'grade_id' => 129,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432198',
        ]);

        User::create([
            'name' => 'User BR',
            'email' => 'userBR@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 4,
            'grade_id' => 130,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432144',
        ]);

        User::create([
            'name' => 'User BS',
            'email' => 'userBS@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 6,
            'grade_id' => 131,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432166',
        ]);

        User::create([
            'name' => 'User BT',
            'email' => 'userBT@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 7,
            'grade_id' => 132,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432176',
        ]);

        User::create([
            'name' => 'User BU',
            'email' => 'userBU@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 6,
            'grade_id' => 133,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432199',
        ]);

        User::create([
            'name' => 'User BV',
            'email' => 'userBV@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 4,
            'department_id' => 5,
            'grade_id' => 134,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432108',
        ]);

        User::create([
            'name' => 'User BW',
            'email' => 'userBW@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 4,
            'grade_id' => 135,
            'remember_token' => Str::random(10),
            'no_hp' => '098765432132',
        ]);

        User::create([
            'name' => 'User BX',
            'email' => 'userBX@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 5,
            'grade_id' => 136,
            'remember_token' => Str::random(10),
            'no_hp' => '124872387492',
        ]);

        User::create([
            'name' => 'User BY',
            'email' => 'userBY@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 6,
            'grade_id' => 137,
            'remember_token' => Str::random(10),
            'no_hp' => '12389458940',
        ]);

        User::create([
            'name' => 'User B0',
            'email' => 'userB0@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 6,
            'grade_id' => 138,
            'remember_token' => Str::random(10),
            'no_hp' => '203480912843',
        ]);

        User::create([
            'name' => 'User B22',
            'email' => 'userB22@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 5,
            'grade_id' => 139,
            'remember_token' => Str::random(10),
            'no_hp' => '29387472398',
        ]);

        User::create([
            'name' => 'User BZ',
            'email' => 'userBZ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 7,
            'grade_id' => 140,
            'remember_token' => Str::random(10),
            'no_hp' => '7829348792',
        ]);

        User::create([
            'name' => 'User CA',
            'email' => 'userCA@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 4,
            'grade_id' => 141,
            'remember_token' => Str::random(10),
            'no_hp' => '29873921',
        ]);

        User::create([
            'name' => 'User CB',
            'email' => 'userCB@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 5,
            'grade_id' => 142,
            'remember_token' => Str::random(10),
            'no_hp' => '923047297111',
        ]);

        User::create([
            'name' => 'User C0',
            'email' => 'userC0@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 3,
            'department_id' => 7,
            'grade_id' => 143,
            'remember_token' => Str::random(10),
            'no_hp' => '4324972311',
        ]);

        User::create([
            'name' => 'User CD',
            'email' => 'userCD@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 1,
            'department_id' => 13,
            'grade_id' => 144,
            'remember_token' => Str::random(10),
            'no_hp' => '457322798',
        ]);

        User::create([
            'name' => 'User 3D',
            'email' => 'user3D@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 2,
            'department_id' => 14,
            'grade_id' => 145,
            'remember_token' => Str::random(10),
            'no_hp' => '3724798349',
        ]);

        // todo:untuk STORE
        // store
        User::create([
            'name' => 'User E',
            'email' => 'userE@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 70,
            'remember_token' => Str::random(10),
            'no_hp' => '92579134820',
        ]);
        User::create([
            'name' => 'User F',
            'email' => 'userF@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 77,
            'remember_token' => Str::random(10),
            'no_hp' => '2308492371',
        ]);
        User::create([
            'name' => 'User G',
            'email' => 'userG@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 75,
            'remember_token' => Str::random(10),
            'no_hp' => '23974823489',
        ]);
        User::create([
            'name' => 'User H',
            'email' => 'userH@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 68,
            'remember_token' => Str::random(10),
            'no_hp' => '11232345',
        ]);
        User::create([
            'name' => 'User EF',
            'email' => 'userEF@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 64,
            'remember_token' => Str::random(10),
            'no_hp' => '23498010',
        ]);
        User::create([
            'name' => 'User EG',
            'email' => 'userEG@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 65,
            'remember_token' => Str::random(10),
            'no_hp' => '45823989',
        ]);
        User::create([
            'name' => 'User EH',
            'email' => 'userEH@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 66,
            'remember_token' => Str::random(10),
            'no_hp' => '20394861894',
        ]);
        User::create([
            'name' => 'User EI',
            'email' => 'userEI@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 67,
            'remember_token' => Str::random(10),
            'no_hp' => '9485029800',
        ]);
        User::create([
            'name' => 'User EA',
            'email' => 'userEA@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 69,
            'remember_token' => Str::random(10),
            'no_hp' => '690237934',
        ]);
        User::create([
            'name' => 'User EB',
            'email' => 'userEB@example.com',
            'password' => Hash::make('1234567890'),

=======
            'area_id' => 2,
>>>>>>> dev
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 71,
            'remember_token' => Str::random(10),
<<<<<<< HEAD
            'no_hp' => '223948975',
        ]);
        User::create([
            'name' => 'User EC',
            'email' => 'userEC@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 72,
            'remember_token' => Str::random(10),
            'no_hp' => '5647829311',
        ]);
        User::create([
            'name' => 'User ED',
            'email' => 'userED@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 73,
            'remember_token' => Str::random(10),
            'no_hp' => '234908021',
        ]);
        User::create([
            'name' => 'User E3',
            'email' => 'userE3@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '123128908',
        ]);
        User::create([
            'name' => 'User EJ',
            'email' => 'userEJ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 79,
            'remember_token' => Str::random(10),
            'no_hp' => '23408234',
        ]);
        User::create([
            'name' => 'User EK',
            'email' => 'userEK@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 78,
            'remember_token' => Str::random(10),
            'no_hp' => '6689239872',
        ]);
        User::create([
            'name' => 'User EL',
            'email' => 'userEL@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 11,
            'grade_id' => 66,
            'remember_token' => Str::random(10),
            'no_hp' => '33995080',
        ]);
        User::create([
            'name' => 'User EM',
            'email' => 'userEM@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 11,
            'grade_id' => 70,
            'remember_token' => Str::random(10),
            'no_hp' => '9038492308',
        ]);
        User::create([
            'name' => 'User EN',
            'email' => 'userEN@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 11,
            'grade_id' => 70,
            'remember_token' => Str::random(10),
            'no_hp' => '98484577445',
        ]);
        User::create([
            'name' => 'User EO',
            'email' => 'userEO@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 67,
            'remember_token' => Str::random(10),
            'no_hp' => '11100938934',
        ]);
        User::create([
            'name' => 'User EP',
            'email' => 'userEP@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 65,
            'remember_token' => Str::random(10),
            'no_hp' => '4543548299',
        ]);

        // warehouse
        // ** WAREHOUSE

        User::create([
            'name' => 'User I',
            'email' => 'userI@example.com',
            'grade_id' => 90,
            'department_id' => 12,

            'division_id' => 8,
            'password' => Hash::make('1234567890'),
            'remember_token' => Str::random(10),
            'no_hp' => '2093123849',
        ]);
        User::create([
            'name' => 'User J',
            'email' => 'userJ@example.com',
            'password' => Hash::make('1234567890'),
            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 99,
            'remember_token' => Str::random(10),
            'no_hp' => '29912084',
        ]);
        User::create([
            'name' => 'User K',
            'email' => 'userK@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 109,
            'remember_token' => Str::random(10),
            'no_hp' => '123909348',
        ]);
        User::create([
            'name' => 'User L',
            'email' => 'userL@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 111,
            'remember_token' => Str::random(10),
            'no_hp' => '1203981238',
        ]);

        User::create([
            'name' => 'User Z2',
            'email' => 'userZ2@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 110,
            'remember_token' => Str::random(10),
            'no_hp' => '23049832',
        ]);

        User::create([
            'name' => 'User Y1',
            'email' => 'userY1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 91,
            'remember_token' => Str::random(10),
            'no_hp' => '983492808',
        ]);

        User::create([
            'name' => 'User X1',
            'email' => 'userX1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 91,
            'remember_token' => Str::random(10),
            'no_hp' => '092139293',
        ]);

        User::create([
            'name' => 'User V1',
            'email' => 'userV1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 108,
            'remember_token' => Str::random(10),
            'no_hp' => '109283904',
        ]);

        User::create([
            'name' => 'User U1',
            'email' => 'userU1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 107,
            'remember_token' => Str::random(10),
            'no_hp' => '21098340',
        ]);

        User::create([
            'name' => 'User T1',
            'email' => 'userT1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 106,
            'remember_token' => Str::random(10),
            'no_hp' => '332242378',
        ]);

        User::create([
            'name' => 'User S1',
            'email' => 'userS1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 105,
            'remember_token' => Str::random(10),
            'no_hp' => '091203819',
        ]);

        User::create([
            'name' => 'User R1',
            'email' => 'userR1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 104,
            'remember_token' => Str::random(10),
            'no_hp' => '689823498',
        ]);

        User::create([
            'name' => 'User Q1 ',
            'email' => 'userQ1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 103,
            'remember_token' => Str::random(10),
            'no_hp' => '548723982',
        ]);

        User::create([
            'name' => 'User O1',
            'email' => 'userO1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 102,
            'remember_token' => Str::random(10),
            'no_hp' => '23492742',
        ]);

        User::create([
            'name' => 'User N1',
            'email' => 'userN1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 99,
            'remember_token' => Str::random(10),
            'no_hp' => '34789278934',
        ]);

        User::create([
            'name' => 'User M2',
            'email' => 'userM2@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 98,
            'remember_token' => Str::random(10),
            'no_hp' => '29348732847',
        ]);

        User::create([
            'name' => 'User L1',
            'email' => 'userL1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 97,
            'remember_token' => Str::random(10),
            'no_hp' => '129388234',
        ]);

        User::create([
            'name' => 'User K1',
            'email' => 'userK1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 96,
            'remember_token' => Str::random(10),
            'no_hp' => '20139812937',
        ]);

        User::create([
            'name' => 'User JJ',
            'email' => 'userJJ@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 95,
            'remember_token' => Str::random(10),
            'no_hp' => '110923892',
        ]);

        User::create([
            'name' => 'User I1',
            'email' => 'userI1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 94,
            'remember_token' => Str::random(10),
            'no_hp' => '2347120983',
=======
            'no_hp' => '87342927739',
>>>>>>> dev
        ]);

        User::create([
            'name' => 'User HH',
            'email' => 'userHH@example.com',
            'password' => Hash::make('1234567890'),
<<<<<<< HEAD

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 93,
            'remember_token' => Str::random(10),
            'no_hp' => '123987897',
        ]);

        User::create([
            'name' => 'User G1',
            'email' => 'userG1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 92,
            'remember_token' => Str::random(10),
            'no_hp' => '8348472191',
        ]);

        User::create([
            'name' => 'User F1',
            'email' => 'userF1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 91,
            'remember_token' => Str::random(10),
            'no_hp' => '192874873',
        ]);

        User::create([
            'name' => 'User E1',
            'email' => 'userE1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 90,
            'remember_token' => Str::random(10),
            'no_hp' => '9283487237',
        ]);

        User::create([
            'name' => 'User D1',
            'email' => 'userD1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 89,
            'remember_token' => Str::random(10),
            'no_hp' => '123878923',
        ]);

        User::create([
            'name' => 'User C1',
            'email' => 'userC1@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 88,
            'remember_token' => Str::random(10),
            'no_hp' => '29929938',
        ]);

        User::create([
            'name' => 'User B3',
            'email' => 'userB3@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 87,
            'remember_token' => Str::random(10),
            'no_hp' => '2389218390',
        ]);

        User::create([
            'name' => 'User LA',
            'email' => 'userLA@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 116,
            'remember_token' => Str::random(10),
            'no_hp' => '2348990218',
        ]);

        User::create([
            'name' => 'User LB',
            'email' => 'userLB@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 87,
            'remember_token' => Str::random(10),
            'no_hp' => '2809123874',
        ]);

        User::create([
            'name' => 'User LC',
            'email' => 'userLC@example.com',
            'password' => Hash::make('1234567890'),

            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 89,
            'remember_token' => Str::random(10),
            'no_hp' => '20398490173',
        ]);

        User::create([
            'name' => 'User LD',
            'email' => 'userLD@example.com',
            'password' => Hash::make('1234567890'),

=======
            'area_id' => 2,
            'division_id' => 7,
            'department_id' => 10,
            'grade_id' => 72,
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
            'grade_id' => 73,
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
            'grade_id' => 74,
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
            'grade_id' => 75,
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
            'grade_id' => 76,
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
            'grade_id' => 77,
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
            'grade_id' => 74,
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
            'grade_id' => 63,
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
            'grade_id' => 74,
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
            'grade_id' => 65,
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
            'grade_id' => 76,
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
            'grade_id' => 67,
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
            'grade_id' => 68,
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
            'grade_id' => 69,
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
            'grade_id' => 75,
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
            'grade_id' => 77,
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
            'grade_id' => 72,
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
            'grade_id' => 73,
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
            'grade_id' => 74,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
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
            'grade_id' => 78,
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
            'grade_id' => 79,
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
            'grade_id' => 80,
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
            'grade_id' => 81,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
        User::create([
            'name' => 'User EEE',
            'email' => 'userEEE@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
>>>>>>> dev
            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 82,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
<<<<<<< HEAD
=======
        User::create([
            'name' => 'User FFF',
            'email' => 'userFFF@example.com',
            'password' => Hash::make('1234567890'),
            'area_id' => 3,
            'division_id' => 8,
            'department_id' => 12,
            'grade_id' => 83,
            'remember_token' => Str::random(10),
            'no_hp' => '87342927739',
        ]);
>>>>>>> dev
    }
}
