<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create(['grade_id' => 1, 'department_id' => 1, 'position_code' => 'C3301', 'position_name' => 'Branch IT Manager']);
        Position::create(['grade_id' => 2, 'department_id' => 1, 'position_code' => 'C3303', 'position_name' => 'Sales Point IT Coordinator']);
        Position::create(['grade_id' => 3, 'department_id' => 1, 'position_code' => 'C3306', 'position_name' => 'Office Support']);
        Position::create(['grade_id' => 4, 'department_id' => 1, 'position_code' => 'C3307', 'position_name' => 'Store Support']);
        Position::create(['grade_id' => 5, 'department_id' => 1, 'position_code' => 'C3358', 'position_name' => 'Chief of IT Support']);
        Position::create(['grade_id' => 6, 'department_id' => 2, 'position_code' => 'F1205', 'position_name' => 'Finance Accounting Manager']);
        Position::create(['grade_id' => 7, 'department_id' => 2, 'position_code' => 'F1251', 'position_name' => 'Branch Accounting Coordinator']);
        Position::create(['grade_id' => 8, 'department_id' => 2, 'position_code' => 'F1253', 'position_name' => 'Branch Accounting Officer']);
        Position::create(['grade_id' => 9, 'department_id' => 2, 'position_code' => 'F1254', 'position_name' => 'Branch Accounting Staff']);
        Position::create(['grade_id' => 10, 'department_id' => 2, 'position_code' => 'F1270', 'position_name' => 'Branch Tax Coordinator']);
        Position::create(['grade_id' => 11, 'department_id' => 2, 'position_code' => 'F1287', 'position_name' => 'A/P Staff']);
        Position::create(['grade_id' => 12, 'department_id' => 2, 'position_code' => 'F1288', 'position_name' => 'A/P Staff']);
        Position::create(['grade_id' => 13, 'department_id' => 2, 'position_code' => 'F1289', 'position_name' => 'A/P Officer']);
        Position::create(['grade_id' => 14, 'department_id' => 2, 'position_code' => 'F1290', 'position_name' => 'A/P Officer']);
        Position::create(['grade_id' => 15, 'department_id' => 2, 'position_code' => 'F1291', 'position_name' => 'A/P Coordinator']);
        Position::create(['grade_id' => 16, 'department_id' => 2, 'position_code' => 'F1575', 'position_name' => 'Branch Finance Cash Specialist']);
        Position::create(['grade_id' => 17, 'department_id' => 2, 'position_code' => 'F1576', 'position_name' => 'Branch Finance Cash Specialist']);
        Position::create(['grade_id' => 18, 'department_id' => 2, 'position_code' => 'F1577', 'position_name' => 'Branch Finance Bank Officer']);
        Position::create(['grade_id' => 19, 'department_id' => 2, 'position_code' => 'F1580', 'position_name' => 'Branch Finance Bank & Cash Coordinator']);
        Position::create(['grade_id' => 20, 'department_id' => 3, 'position_code' => 'F5141', 'position_name' => 'Inventory Control Operation Manager']);
        Position::create(['grade_id' => 21, 'department_id' => 3, 'position_code' => 'F5150', 'position_name' => 'Branch Store Inventory Control Specialist']);
        Position::create(['grade_id' => 22, 'department_id' => 3, 'position_code' => 'F5151', 'position_name' => 'Branch Store Inventory Control Specialist']);
        Position::create(['grade_id' => 23, 'department_id' => 3, 'position_code' => 'F5155', 'position_name' => 'Branch Warehouse Inventory Control Specialist']);
        Position::create(['grade_id' => 24, 'department_id' => 3, 'position_code' => 'F5156', 'position_name' => 'Branch Warehouse Inventory Control Specialist']);
        Position::create(['grade_id' => 25, 'department_id' => 3, 'position_code' => 'F5160', 'position_name' => 'Branch Warehouse Inventory Control Coordinator']);
        Position::create(['grade_id' => 26, 'department_id' => 4, 'position_code' => 'G1332', 'position_name' => 'Branch Corporate Communication Specialist']);
        Position::create(['grade_id' => 27, 'department_id' => 4, 'position_code' => 'G1618', 'position_name' => 'Branch Loss Prevention Coordinator']);
        Position::create(['grade_id' => 28, 'department_id' => 4, 'position_code' => 'G1620', 'position_name' => 'Branch Area Loss Prevention']);
        Position::create(['grade_id' => 29, 'department_id' => 4, 'position_code' => 'G1621', 'position_name' => 'Branch Area Loss Prevention']);
        Position::create(['grade_id' => 30, 'department_id' => 5, 'position_code' => 'H1820', 'position_name' => 'Branch General Affair Coordinator']);
        Position::create(['grade_id' => 31, 'department_id' => 5, 'position_code' => 'H1842', 'position_name' => 'Branch Fix Asset Coordinator']);
        Position::create(['grade_id' => 32, 'department_id' => 5, 'position_code' => 'H1910', 'position_name' => 'General Service Manager']);
        Position::create(['grade_id' => 33, 'department_id' => 5, 'position_code' => 'H1922', 'position_name' => 'Branch General Affair Administrator']);
        Position::create(['grade_id' => 34, 'department_id' => 5, 'position_code' => 'H1923', 'position_name' => 'Branch General Affair Administrator']);
        Position::create(['grade_id' => 35, 'department_id' => 5, 'position_code' => 'H1931', 'position_name' => 'Branch Fix Asset Administrator']);
        Position::create(['grade_id' => 36, 'department_id' => 5, 'position_code' => 'H1933', 'position_name' => 'Branch Fix Asset Administrator']);
        Position::create(['grade_id' => 37, 'department_id' => 5, 'position_code' => 'H2272', 'position_name' => 'Branch Purchasing Administrator']);
        Position::create(['grade_id' => 38, 'department_id' => 6, 'position_code' => 'H1864', 'position_name' => 'Branch Personnel Coordinator']);
        Position::create(['grade_id' => 39, 'department_id' => 6, 'position_code' => 'H1893', 'position_name' => 'Branch Training Coordinator']);
        Position::create(['grade_id' => 40, 'department_id' => 6, 'position_code' => 'H1894', 'position_name' => 'Branch Trainer']);
        Position::create(['grade_id' => 41, 'department_id' => 6, 'position_code' => 'H1950', 'position_name' => 'People Development Manager']);
        Position::create(['grade_id' => 42, 'department_id' => 6, 'position_code' => 'H1962', 'position_name' => 'Branch Personnel Administrator']);
        Position::create(['grade_id' => 43, 'department_id' => 6, 'position_code' => 'H1974', 'position_name' => 'Branch Recruitment']);
        Position::create(['grade_id' => 44, 'department_id' => 6, 'position_code' => 'H1979', 'position_name' => 'Branch Recruitment & Assessment Coordinator']);
        Position::create(['grade_id' => 45, 'department_id' => 6, 'position_code' => 'H1981', 'position_name' => 'Branch Trainer']);
        Position::create(['grade_id' => 46, 'department_id' => 6, 'position_code' => 'H1982', 'position_name' => 'Branch Trainer']);
        Position::create(['grade_id' => 47, 'department_id' => 6, 'position_code' => 'H1995', 'position_name' => 'BRANCH TRAINER WAREHOUSE']);
        Position::create(['grade_id' => 48, 'department_id' => 7, 'position_code' => 'K1302', 'position_name' => 'Branch Marketing Manager']);
        Position::create(['grade_id' => 49, 'department_id' => 7, 'position_code' => 'K1310', 'position_name' => 'Branch Promotion Coordinator']);
        Position::create(['grade_id' => 50, 'department_id' => 7, 'position_code' => 'K1821', 'position_name' => 'Branch Promotion']);
        Position::create(['grade_id' => 51, 'department_id' => 7, 'position_code' => 'K1824', 'position_name' => 'Branch Promotion']);
        Position::create(['grade_id' => 52, 'department_id' => 7, 'position_code' => 'K1831', 'position_name' => 'Branch Marketing Communication']);
        Position::create(['grade_id' => 53, 'department_id' => 7, 'position_code' => 'K1837', 'position_name' => 'Branch CRM']);
        Position::create(['grade_id' => 54, 'department_id' => 8, 'position_code' => 'M2278', 'position_name' => 'Branch Merchandising Manager']);
        Position::create(['grade_id' => 55, 'department_id' => 8, 'position_code' => 'M2280', 'position_name' => 'Branch Buyer Food']);
        Position::create(['grade_id' => 56, 'department_id' => 8, 'position_code' => 'M2282', 'position_name' => 'Branch Buyer Non Food']);
        Position::create(['grade_id' => 57, 'department_id' => 8, 'position_code' => 'M3047', 'position_name' => 'Branch Category Coordinator']);
        Position::create(['grade_id' => 58, 'department_id' => 8, 'position_code' => 'M3049', 'position_name' => 'Branch Product Analyst']);
        Position::create(['grade_id' => 59, 'department_id' => 8, 'position_code' => 'M3050', 'position_name' => 'Branch Product Analyst']);
        Position::create(['grade_id' => 60, 'department_id' => 8, 'position_code' => 'M3054', 'position_name' => 'Branch Layout & Planogram']);
        Position::create(['grade_id' => 61, 'department_id' => 8, 'position_code' => 'M3059', 'position_name' => 'Branch Instore Development']);
        Position::create(['grade_id' => 62, 'department_id' => 9, 'position_code' => 'O1101', 'position_name' => 'Branch Manager']);
        Position::create(['grade_id' => 63, 'department_id' => 10, 'position_code' => 'O1155', 'position_name' => 'Area Support']);
        Position::create(['grade_id' => 64, 'department_id' => 10, 'position_code' => 'O1156', 'position_name' => 'Area Support']);
        Position::create(['grade_id' => 65, 'department_id' => 10, 'position_code' => 'O1201', 'position_name' => 'Area Manager']);
        Position::create(['grade_id' => 66, 'department_id' => 10, 'position_code' => 'O1210', 'position_name' => 'Area Coordinator']);
        Position::create(['grade_id' => 67, 'department_id' => 10, 'position_code' => 'O1211', 'position_name' => 'Area Coordinator']);
        Position::create(['grade_id' => 68, 'department_id' => 10, 'position_code' => 'O1226', 'position_name' => 'Chief Of Store']);
        Position::create(['grade_id' => 69, 'department_id' => 10, 'position_code' => 'O1227', 'position_name' => 'Chief Of Store']);
        Position::create(['grade_id' => 70, 'department_id' => 10, 'position_code' => 'O1232', 'position_name' => 'Crew']);
        Position::create(['grade_id' => 71, 'department_id' => 10, 'position_code' => 'O1234', 'position_name' => 'Assistant Chief of Store']);
        Position::create(['grade_id' => 72, 'department_id' => 10, 'position_code' => 'O1235', 'position_name' => 'Assistant Chief of Store']);
        Position::create(['grade_id' => 73, 'department_id' => 10, 'position_code' => 'O1236', 'position_name' => 'Crew']);
        Position::create(['grade_id' => 74, 'department_id' => 11, 'position_code' => 'O1602', 'position_name' => 'Task Force Leader']);
        Position::create(['grade_id' => 75, 'department_id' => 11, 'position_code' => 'O1603', 'position_name' => 'Task Force Leader']);
        Position::create(['grade_id' => 76, 'department_id' => 11, 'position_code' => 'O3949', 'position_name' => 'Task Force Leader']);
        Position::create(['grade_id' => 77, 'department_id' => 11, 'position_code' => 'O3951', 'position_name' => 'Task Force Leader']);
        Position::create(['grade_id' => 78, 'department_id' =>  12, 'position_code' => 'O2112', 'position_name' => 'Receiving Administration Officer']);
        Position::create(['grade_id' => 79, 'department_id' =>  12, 'position_code' => 'O2113', 'position_name' => 'Receiving Administration Officer']);
        Position::create(['grade_id' => 80, 'department_id' =>  12, 'position_code' => 'O2115', 'position_name' => 'Issuing Administration Officer']);
        Position::create(['grade_id' => 81, 'department_id' =>  12, 'position_code' => 'O2116', 'position_name' => 'Issuing Administration Officer']);
        Position::create(['grade_id' => 82, 'department_id' =>  12, 'position_code' => 'O2130', 'position_name' => 'Receiving Coordinator']);
        Position::create(['grade_id' => 83, 'department_id' =>  12, 'position_code' => 'O2132', 'position_name' => 'Receiving Officer']);
        Position::create(['grade_id' => 84, 'department_id' =>  12, 'position_code' => 'O2133', 'position_name' => 'Receiving Officer']);
        Position::create(['grade_id' => 85, 'department_id' =>  12, 'position_code' => 'O2137', 'position_name' => 'Retur Officer']);
        Position::create(['grade_id' => 86, 'department_id' =>  12, 'position_code' => 'O2138', 'position_name' => 'Retur Officer']);
        Position::create(['grade_id' => 87, 'department_id' =>  12, 'position_code' => 'O2141', 'position_name' => 'Helper (Retur)']);
        Position::create(['grade_id' => 88, 'department_id' =>  12, 'position_code' => 'O2152', 'position_name' => 'Progress Officer']);
        Position::create(['grade_id' => 89, 'department_id' =>  12, 'position_code' => 'O2153', 'position_name' => 'Progress Officer']);
        Position::create(['grade_id' => 90, 'department_id' =>  12, 'position_code' => 'O2156', 'position_name' => 'Helper (Progress)']);
        Position::create(['grade_id' => 91, 'department_id' =>  12, 'position_code' => 'O2157', 'position_name' => 'Floor Officer']);
        Position::create(['grade_id' => 92, 'department_id' =>  12, 'position_code' => 'O2158', 'position_name' => 'Floor Officer']);
        Position::create(['grade_id' => 93, 'department_id' =>  12, 'position_code' => 'O2160', 'position_name' => 'Picker']);
        Position::create(['grade_id' => 94, 'department_id' =>  12, 'position_code' => 'O2181', 'position_name' => 'Issuing Coordinator']);
        Position::create(['grade_id' => 95, 'department_id' =>  12, 'position_code' => 'O2186', 'position_name' => 'Helper (Issuing)']);
        Position::create(['grade_id' => 96, 'department_id' =>  12, 'position_code' => 'O2190', 'position_name' => 'Issuing Officer']);
        Position::create(['grade_id' => 97, 'department_id' =>  12, 'position_code' => 'O2191', 'position_name' => 'Issuing Officer']);
        Position::create(['grade_id' => 98, 'department_id' =>  12, 'position_code' => 'O2204', 'position_name' => 'Warehouse Manager']);
        Position::create(['grade_id' => 99, 'department_id' =>  12, 'position_code' => 'O2205', 'position_name' => 'Deputy Warehouse Manager']);
        Position::create(['grade_id' => 100, 'department_id' => 12, 'position_code' => 'O2206', 'position_name' => 'Warehouse Administration Coordinator']);
        Position::create(['grade_id' => 101, 'department_id' => 12, 'position_code' => 'O2207', 'position_name' => 'Warehouse Administration Coordinator']);
        Position::create(['grade_id' => 102, 'department_id' => 12, 'position_code' => 'O2210', 'position_name' => 'Godown Coordinator']);
        Position::create(['grade_id' => 103, 'department_id' => 12, 'position_code' => 'O2211', 'position_name' => 'Godown Coordinator']);
        Position::create(['grade_id' => 104, 'department_id' => 12, 'position_code' => 'O2401', 'position_name' => 'Picker']);
        Position::create(['grade_id' => 105, 'department_id' => 12, 'position_code' => 'O2402', 'position_name' => 'Chief of Return']);
        Position::create(['grade_id' => 106, 'department_id' => 12, 'position_code' => 'O2404', 'position_name' => 'Issuing Administrator']);
        Position::create(['grade_id' => 107, 'department_id' => 12, 'position_code' => 'O2406', 'position_name' => 'Receiving Administrator']);
        Position::create(['grade_id' => 108, 'department_id' => 12, 'position_code' => 'O2407', 'position_name' => 'Receiving Administrator']);
        Position::create(['grade_id' => 109, 'department_id' => 12, 'position_code' => 'O2408', 'position_name' => 'Chief of Issuing']);
        Position::create(['grade_id' => 110, 'department_id' => 12, 'position_code' => 'O2409', 'position_name' => 'Chief of Issuing']);
        Position::create(['grade_id' => 111, 'department_id' => 12, 'position_code' => 'O2501', 'position_name' => 'Sorter Issuing']);
        Position::create(['grade_id' => 112, 'department_id' => 12, 'position_code' => 'O2502', 'position_name' => 'Sorter Issuing']);
        Position::create(['grade_id' => 113, 'department_id' => 12, 'position_code' => 'O2503', 'position_name' => 'Sorter Return']);
        Position::create(['grade_id' => 114, 'department_id' => 12, 'position_code' => 'O2504', 'position_name' => 'Sorter Return']);
        Position::create(['grade_id' => 115, 'department_id' => 12, 'position_code' => 'O2602', 'position_name' => 'Chief of Receiving']);
        Position::create(['grade_id' => 116, 'department_id' => 12, 'position_code' => 'O2603', 'position_name' => 'Chief of Floor']);
        Position::create(['grade_id' => 117, 'department_id' => 12, 'position_code' => 'O2604', 'position_name' => 'Chief of Floor']);
        Position::create(['grade_id' => 118, 'department_id' => 12, 'position_code' => 'O2605', 'position_name' => 'Chief of Progress']);
        Position::create(['grade_id' => 119, 'department_id' => 13, 'position_code' => 'R4304', 'position_name' => 'Franchise Administration Support']);
        Position::create(['grade_id' => 120, 'department_id' => 13, 'position_code' => 'R4305', 'position_name' => 'Franchise Relation']);
        Position::create(['grade_id' => 121, 'department_id' => 13, 'position_code' => 'R4307', 'position_name' => 'Franchise Relation']);
        Position::create(['grade_id' => 122, 'department_id' => 14, 'position_code' => 'R5228', 'position_name' => 'Branch Franchise Finance Staff']);
        Position::create(['grade_id' => 123, 'department_id' => 14, 'position_code' => 'R5229', 'position_name' => 'Branch Franchise Finance Staff']);
        Position::create(['grade_id' => 124, 'department_id' => 14, 'position_code' => 'R5415', 'position_name' => 'Branch Franchise Tax Officer']);
        Position::create(['grade_id' => 125, 'department_id' => 14, 'position_code' => 'R5811', 'position_name' => 'Branch Franchise Administration Manager']);
        Position::create(['grade_id' => 126, 'department_id' => 14, 'position_code' => 'R5813', 'position_name' => 'Branch Franchise Tax Coordinator']);
        Position::create(['grade_id' => 127, 'department_id' => 14, 'position_code' => 'R5819', 'position_name' => 'Branch Franchise Accounting Coordinator']);
        Position::create(['grade_id' => 128, 'department_id' => 14, 'position_code' => 'R5820', 'position_name' => 'Branch Franchise Accounting Officer']);
        Position::create(['grade_id' => 129, 'department_id' => 14, 'position_code' => 'R5821', 'position_name' => 'Branch Franchise Accounting Officer']);
        Position::create(['grade_id' => 130, 'department_id' => 14, 'position_code' => 'R5824', 'position_name' => 'Branch Franchise Finance Coordinator']);
        Position::create(['grade_id' => 131, 'department_id' => 14, 'position_code' => 'R5826', 'position_name' => 'Branch Franchise Finance Officer']);
        Position::create(['grade_id' => 132, 'department_id' => 14, 'position_code' => 'R5827', 'position_name' => 'Branch Franchise Finance Officer']);
        Position::create(['grade_id' => 133, 'department_id' => 15, 'position_code' => 'YY124', 'position_name' => 'Branch Location Manager']);
        Position::create(['grade_id' => 134, 'department_id' => 15, 'position_code' => 'YY133', 'position_name' => 'Branch Location & Tenant Administrator']);
        Position::create(['grade_id' => 135, 'department_id' => 15, 'position_code' => 'YY281', 'position_name' => 'Branch Location & Tenant Officer']);
        Position::create(['grade_id' => 136, 'department_id' => 16, 'position_code' => 'YY238', 'position_name' => 'Branch Building & Maintenance Manager']);
        Position::create(['grade_id' => 137, 'department_id' => 16, 'position_code' => 'YY239', 'position_name' => 'Branch Building Coordinator']);
        Position::create(['grade_id' => 138, 'department_id' => 16, 'position_code' => 'YY242', 'position_name' => 'Branch Maintenance Coordinator']);
        Position::create(['grade_id' => 139, 'department_id' => 16, 'position_code' => 'YY245', 'position_name' => 'Branch Building Support']);
        Position::create(['grade_id' => 140, 'department_id' => 16, 'position_code' => 'YY248', 'position_name' => 'Branch Maintenance Support']);
        Position::create(['grade_id' => 141, 'department_id' => 16, 'position_code' => 'YY249', 'position_name' => 'Branch Maintenance Support']);
        Position::create(['grade_id' => 142, 'department_id' => 16, 'position_code' => 'YY250', 'position_name' => 'Branch Maintenance Support']);
        Position::create(['grade_id' => 143, 'department_id' => 16, 'position_code' => 'YY256', 'position_name' => 'Branch Building & Maintenance Administrator']);
        Position::create(['grade_id' => 144, 'department_id' => 16, 'position_code' => 'YY258', 'position_name' => 'Branch Engineering Coordinator']);
        Position::create(['grade_id' => 145, 'department_id' => 16, 'position_code' => 'YY260', 'position_name' => 'Branch Engineering Support']);
        Position::create(['grade_id' => 146, 'department_id' => 16, 'position_code' => 'YY262', 'position_name' => 'Branch Engineering Support']);

        // khusus dept area AM
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AM001', 'position_name' => 'Area Manager 1']);
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AM002', 'position_name' => 'Area Manager 2']);
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AM003', 'position_name' => 'Area Manager 3']);
        // AC
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AC001', 'position_name' => 'Area Coordinator 1']);
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AC002', 'position_name' => 'Area Coordinator 2']);
        Position::create(['grade_id' => 146, 'department_id' => 10, 'position_code' => 'AC003', 'position_name' => 'Area Coordinator 3']);
    }
}
