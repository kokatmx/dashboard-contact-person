<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Grade::create(['position_id' => 1, 'min_grade' => 11, 'max_grade' => 12]); // Branch IT Manager
        Grade::create(['position_id' => 2, 'min_grade' => 10, 'max_grade' => 10]); // Sales Point IT Coordinator
        Grade::create(['position_id' => 3, 'min_grade' => 8, 'max_grade' => 8]);   // Office Support
        Grade::create(['position_id' => 4, 'min_grade' => 8, 'max_grade' => 8]);   // Store Support
        Grade::create(['position_id' => 5, 'min_grade' => 9, 'max_grade' => 9]);   // Chief of IT Support
        Grade::create(['position_id' => 6, 'min_grade' => 11, 'max_grade' => 12]); // Finance Accounting Manager
        Grade::create(['position_id' => 7, 'min_grade' => 9, 'max_grade' => 10]);  // Branch Accounting Coordinator
        Grade::create(['position_id' => 8, 'min_grade' => 8, 'max_grade' => 8]);   // Branch Accounting Officer
        Grade::create(['position_id' => 9, 'min_grade' => 7, 'max_grade' => 7]);   // Branch Accounting Staff
        Grade::create(['position_id' => 10, 'min_grade' => 9, 'max_grade' => 10]); // Branch Tax Coordinator
        Grade::create(['position_id' => 11, 'min_grade' => 7, 'max_grade' => 7]);  // A/P Staff
        Grade::create(['position_id' => 12, 'min_grade' => 8, 'max_grade' => 8]);  // A/P Officer
        Grade::create(['position_id' => 13, 'min_grade' => 7, 'max_grade' => 8]);  // Branch Finance Cash Specialist
        Grade::create(['position_id' => 14, 'min_grade' => 8, 'max_grade' => 8]);  // Branch Finance Bank Officer
        Grade::create(['position_id' => 15, 'min_grade' => 9, 'max_grade' => 10]); // Branch Finance Bank & Cash Coordinator
        Grade::create(['position_id' => 16, 'min_grade' => 11, 'max_grade' => 12]); // Inventory Control Operation Manager
        Grade::create(['position_id' => 17, 'min_grade' => 7, 'max_grade' => 8]);  // Branch Store Inventory Control Specialist
        Grade::create(['position_id' => 18, 'min_grade' => 7, 'max_grade' => 8]);  // Branch Warehouse Inventory Control Specialist
        Grade::create(['position_id' => 19, 'min_grade' => 9, 'max_grade' => 10]); // Branch Warehouse Inventory Control Coordinator
        Grade::create(['position_id' => 20, 'min_grade' => 9, 'max_grade' => 10]); // Branch Corporate Communication Specialist
        Grade::create(['position_id' => 21, 'min_grade' => 9, 'max_grade' => 9]);  // Branch Loss Prevention Coordinator
        Grade::create(['position_id' => 22, 'min_grade' => 8, 'max_grade' => 8]);  // Branch Area Loss Prevention
        Grade::create(['position_id' => 23, 'min_grade' => 9, 'max_grade' => 10]); // Branch General Affair Coordinator
        Grade::create(['position_id' => 24, 'min_grade' => 9, 'max_grade' => 10]); // Branch Fix Asset Coordinator
        Grade::create(['position_id' => 25, 'min_grade' => 11, 'max_grade' => 12]); // General Service Manager
        Grade::create(['position_id' => 26, 'min_grade' => 7, 'max_grade' => 8]);  // Branch General Affair Administrator
=======
        Grade::create(['position_id' => 1, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 2, 'min_grade' => 10, 'max_grade' => 10]);
        Grade::create(['position_id' => 3, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 4, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 5, 'min_grade' => 9, 'max_grade' => 9]);
        Grade::create(['position_id' => 6, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 7, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 8, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 9, 'min_grade' => 7, 'max_grade' => 7]);
        Grade::create(['position_id' => 10, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 11, 'min_grade' => 7, 'max_grade' => 7]);
        Grade::create(['position_id' => 12, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 13, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 14, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 15, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 16, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 17, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 18, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 19, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 20, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 21, 'min_grade' => 9, 'max_grade' => 9]);
        Grade::create(['position_id' => 22, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 23, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 24, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 25, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 26, 'min_grade' => 7, 'max_grade' => 8]);
>>>>>>> dev
        Grade::create(['position_id' => 27, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 28, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 29, 'min_grade' => 9, 'max_grade' => 9]);
        Grade::create(['position_id' => 30, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 31, 'min_grade' => 8, 'max_grade' => 8]);
        Grade::create(['position_id' => 32, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 33, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 34, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 35, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 36, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 37, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 38, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 39, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 40, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 41, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 42, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 43, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 44, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 45, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 46, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 47, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 48, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 49, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 50, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 51, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 52, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 53, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 54, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 55, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 56, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 57, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 58, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 59, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 60, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 61, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 62, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 63, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 64, 'min_grade' => 12, 'max_grade' => 99]);
        Grade::create(['position_id' => 65, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 66, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 67, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 68, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 69, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 70, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 71, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 72, 'min_grade' => 0, 'max_grade' => 6]);
        Grade::create(['position_id' => 73, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 74, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 75, 'min_grade' => 0, 'max_grade' => 6]);
        Grade::create(['position_id' => 76, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 77, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 78, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 79, 'min_grade' => 8, 'max_grade' => 9]);
        Grade::create(['position_id' => 80, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 81, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 82, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 83, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 84, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 85, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 86, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 87, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 88, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 89, 'min_grade' => 7, 'max_grade' => 99]);
        Grade::create(['position_id' => 90, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 91, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 92, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 93, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 94, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 95, 'min_grade' => 7, 'max_grade' => 99]);
        Grade::create(['position_id' => 96, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 97, 'min_grade' => 7, 'max_grade' => 99]);
        Grade::create(['position_id' => 98, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 99, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 100, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 101, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 102, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 103, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 104, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 105, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 106, 'min_grade' => 7, 'max_grade' => 99]);
        Grade::create(['position_id' => 107, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 108, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 109, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 110, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 111, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 112, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 113, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 114, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 115, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 116, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 117, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 118, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 119, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 120, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 121, 'min_grade' => 7, 'max_grade' => 7]);
        Grade::create(['position_id' => 122, 'min_grade' => 9, 'max_grade' => 9]);
        Grade::create(['position_id' => 123, 'min_grade' => 9, 'max_grade' => 9]);
        Grade::create(['position_id' => 124, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 125, 'min_grade' => 6, 'max_grade' => 7]);
        Grade::create(['position_id' => 126, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 127, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 128, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 129, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 130, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 131, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 132, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 133, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 134, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 135, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 136, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 137, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 138, 'min_grade' => 11, 'max_grade' => 12]);
        Grade::create(['position_id' => 139, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 140, 'min_grade' => 9, 'max_grade' => 10]);
        Grade::create(['position_id' => 141, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 142, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 143, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 144, 'min_grade' => 7, 'max_grade' => 8]);
        Grade::create(['position_id' => 145, 'min_grade' => 0, 'max_grade' => 7]);
        Grade::create(['position_id' => 146, 'min_grade' => 9, 'max_grade' => 10]);
<<<<<<< HEAD
        // Grade::create(['position_id' => 147, 'min_grade' => 7, 'max_grade' => 8]);
        // Grade::create(['position_id' => 148, 'min_grade' => 7, 'max_grade' => 8]);
=======
>>>>>>> dev
    }
}
