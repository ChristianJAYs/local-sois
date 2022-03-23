<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Sets Initial Permissions
     * @return void
     */
    public function run()
    {
        $AROfficerUserID = 3;
        $ARPresidentUserID = 4;
        $MemberUserID = 8;
        $data = [
                // Victoria Dolor - AR Officer+Member Initial Permissions
                ['user_id' => 3, 'permission_id' => 1,],
                ['user_id' => 3, 'permission_id' => 2,],
                ['user_id' => 3, 'permission_id' => 3,],
                ['user_id' => 3, 'permission_id' => 4,],
                ['user_id' => 3, 'permission_id' => 5,],
                ['user_id' => 3, 'permission_id' => 6,],
                ['user_id' => 3, 'permission_id' => 7,],
                ['user_id' => 3, 'permission_id' => 8,],
                ['user_id' => 3, 'permission_id' => 9,],
                ['user_id' => 3, 'permission_id' => 10,],
                ['user_id' => 3, 'permission_id' => 11,],
                ['user_id' => 3, 'permission_id' => 12,],
                ['user_id' => 3, 'permission_id' => 13,],
                ['user_id' => 3, 'permission_id' => 14,],
                ['user_id' => 3, 'permission_id' => 16,],
                ['user_id' => 3, 'permission_id' => 17,],
                ['user_id' => 3, 'permission_id' => 18,],
                ['user_id' => 3, 'permission_id' => 19,],
                ['user_id' => 3, 'permission_id' => 20,],
                ['user_id' => 3, 'permission_id' => 21,],
                ['user_id' => 3, 'permission_id' => 22,],
                ['user_id' => 3, 'permission_id' => 23,],
                ['user_id' => 3, 'permission_id' => 24,],
                ['user_id' => 3, 'permission_id' => 25,],
                ['user_id' => 3, 'permission_id' => 26,],
                ['user_id' => 3, 'permission_id' => 27,],
                ['user_id' => 3, 'permission_id' => 29,],
                ['user_id' => 3, 'permission_id' => 28,],
                ['user_id' => 3, 'permission_id' => 30,],
                ['user_id' => 3, 'permission_id' => 31,],
                ['user_id' => 3, 'permission_id' => 38,],

                // JC Amaguin AR President+Member Initial Permissions
                ['user_id' => 4, 'permission_id' => 15,],
                ['user_id' => 4, 'permission_id' => 16,],
                ['user_id' => 4, 'permission_id' => 17,],
                ['user_id' => 4, 'permission_id' => 18,],
                ['user_id' => 4, 'permission_id' => 19,],
                ['role_id' => 8, 'permission_id' => 28,],
                ['role_id' => 8, 'permission_id' => 30,],
                ['user_id' => 4, 'permission_id' => 31,],

                // Test Member Initial Permissions
                ['user_id' => 8, 'permission_id' => 18,],
                ['user_id' => 8, 'permission_id' => 19,],
                ['user_id' => 8, 'permission_id' => 28,],
                ['user_id' => 8, 'permission_id' => 30,],
                ['user_id' => 8, 'permission_id' => 31,],

                // Super Admin Initial Permissions
                ['user_id' => 1, 'permission_id' => 32,],
                ['user_id' => 1, 'permission_id' => 33,],
                ['user_id' => 1, 'permission_id' => 34,],
                ['user_id' => 1, 'permission_id' => 35,],
                ['user_id' => 1, 'permission_id' => 36,],
                ['user_id' => 1, 'permission_id' => 37,],

                // Super Admin Homepage Initial Permissions
                ['user_id' => 1, 'permission_id' => 39,],
                ['user_id' => 1, 'permission_id' => 40,],
                ['user_id' => 1, 'permission_id' => 41,],
                ['user_id' => 1, 'permission_id' => 42,],
                ['user_id' => 1, 'permission_id' => 43,],
                ['user_id' => 1, 'permission_id' => 44,],
                ['user_id' => 1, 'permission_id' => 45,],
                ['user_id' => 1, 'permission_id' => 46,],
                ['user_id' => 1, 'permission_id' => 47,],
                ['user_id' => 1, 'permission_id' => 48,],
                ['user_id' => 1, 'permission_id' => 49,],
                ['user_id' => 1, 'permission_id' => 50,],
                ['user_id' => 1, 'permission_id' => 51,],
                ['user_id' => 1, 'permission_id' => 52,],
                ['user_id' => 1, 'permission_id' => 53,],
                ['user_id' => 1, 'permission_id' => 54,],
                ['user_id' => 1, 'permission_id' => 55,],
                ['user_id' => 1, 'permission_id' => 56,],
                ['user_id' => 1, 'permission_id' => 57,],
                ['user_id' => 1, 'permission_id' => 58,],
                ['user_id' => 1, 'permission_id' => 59,],
                ['user_id' => 1, 'permission_id' => 60,],
                ['user_id' => 1, 'permission_id' => 61,],
                ['user_id' => 1, 'permission_id' => 62,],
                ['user_id' => 1, 'permission_id' => 63,],
                ['user_id' => 1, 'permission_id' => 64,],
                ['user_id' => 1, 'permission_id' => 65,],
                ['user_id' => 1, 'permission_id' => 66,],
                ['user_id' => 1, 'permission_id' => 67,],
                ['user_id' => 1, 'permission_id' => 68,],
                ['user_id' => 1, 'permission_id' => 69,],
                ['user_id' => 1, 'permission_id' => 70,],
                ['user_id' => 1, 'permission_id' => 71,],
                ['user_id' => 1, 'permission_id' => 72,],
                ['user_id' => 1, 'permission_id' => 73,],
                ['user_id' => 1, 'permission_id' => 74,],
                ['user_id' => 1, 'permission_id' => 75,],
                ['user_id' => 1, 'permission_id' => 76,],
                ['user_id' => 1, 'permission_id' => 77,], 

                // AVP AR Officer (2 role Officer + Member) Initial Permissions
                ['user_id' => 9, 'permission_id' => 1,],
                ['user_id' => 9, 'permission_id' => 2,],
                ['user_id' => 9, 'permission_id' => 3,],
                ['user_id' => 9, 'permission_id' => 4,],
                ['user_id' => 9, 'permission_id' => 5,],
                ['user_id' => 9, 'permission_id' => 6,],
                ['user_id' => 9, 'permission_id' => 7,],
                ['user_id' => 9, 'permission_id' => 8,],
                ['user_id' => 9, 'permission_id' => 9,],
                ['user_id' => 9, 'permission_id' => 10,],
                ['user_id' => 9, 'permission_id' => 11,],
                ['user_id' => 9, 'permission_id' => 12,],
                ['user_id' => 9, 'permission_id' => 13,],
                ['user_id' => 9, 'permission_id' => 14,],
                ['user_id' => 9, 'permission_id' => 16,],
                ['user_id' => 9, 'permission_id' => 17,],
                ['user_id' => 9, 'permission_id' => 18,],
                ['user_id' => 9, 'permission_id' => 19,],
                ['user_id' => 9, 'permission_id' => 20,],
                ['user_id' => 9, 'permission_id' => 21,],
                ['user_id' => 9, 'permission_id' => 22,],
                ['user_id' => 9, 'permission_id' => 23,],
                ['user_id' => 9, 'permission_id' => 24,],
                ['user_id' => 9, 'permission_id' => 25,],
                ['user_id' => 9, 'permission_id' => 26,],
                ['user_id' => 9, 'permission_id' => 27,],
                ['user_id' => 9, 'permission_id' => 29,],
                ['user_id' => 9, 'permission_id' => 28,],
                ['user_id' => 9, 'permission_id' => 30,],
                ['user_id' => 9, 'permission_id' => 31,],
                ['user_id' => 3, 'permission_id' => 38,],

                // Head of Student Services Permission
                ['user_id' => 16, 'permission_id' => 32,],
                ['user_id' => 16, 'permission_id' => 33,],
                ['user_id' => 16, 'permission_id' => 34,],
                ['user_id' => 16, 'permission_id' => 35,],
                ['user_id' => 16, 'permission_id' => 36,],

                // Director Permission
                ['user_id' => 15, 'permission_id' => 32,],
                ['user_id' => 15, 'permission_id' => 33,],
                ['user_id' => 15, 'permission_id' => 34,],
                ['user_id' => 15, 'permission_id' => 35,],
                ['user_id' => 15, 'permission_id' => 36,],

                // Homepage Admin Permissions
                ['user_id' => 2, 'permission_id' => 39,],
                ['user_id' => 2, 'permission_id' => 40,],
                ['user_id' => 2, 'permission_id' => 41,],
                ['user_id' => 2, 'permission_id' => 42,],
                ['user_id' => 2, 'permission_id' => 43,],
                ['user_id' => 2, 'permission_id' => 44,],
                ['user_id' => 2, 'permission_id' => 45,],
                ['user_id' => 2, 'permission_id' => 46,],
                ['user_id' => 2, 'permission_id' => 47,],
                ['user_id' => 2, 'permission_id' => 48,],
                ['user_id' => 2, 'permission_id' => 49,],
                ['user_id' => 2, 'permission_id' => 50,],
                ['user_id' => 2, 'permission_id' => 51,],
                ['user_id' => 2, 'permission_id' => 52,],
                ['user_id' => 2, 'permission_id' => 53,],
                ['user_id' => 2, 'permission_id' => 54,],
                ['user_id' => 2, 'permission_id' => 55,],
                ['user_id' => 2, 'permission_id' => 56,],
                ['user_id' => 2, 'permission_id' => 57,],
                ['user_id' => 2, 'permission_id' => 58,],
                ['user_id' => 2, 'permission_id' => 59,],
                ['user_id' => 2, 'permission_id' => 60,],
                ['user_id' => 2, 'permission_id' => 61,],
                ['user_id' => 2, 'permission_id' => 62,],
                ['user_id' => 2, 'permission_id' => 63,],
                ['user_id' => 2, 'permission_id' => 64,],
                ['user_id' => 2, 'permission_id' => 65,],
                ['user_id' => 2, 'permission_id' => 66,],
                ['user_id' => 2, 'permission_id' => 67,],
                ['user_id' => 2, 'permission_id' => 68,],
                ['user_id' => 2, 'permission_id' => 69,],
                ['user_id' => 2, 'permission_id' => 70,],
                ['user_id' => 2, 'permission_id' => 71,],
                ['user_id' => 2, 'permission_id' => 72,],
                ['user_id' => 2, 'permission_id' => 73,],
                ['user_id' => 2, 'permission_id' => 74,],
                ['user_id' => 2, 'permission_id' => 75,],
                ['user_id' => 2, 'permission_id' => 76,],
                ['user_id' => 2, 'permission_id' => 77,],             
            
        ];
        DB::table('permission_user')->insert($data);
    }
}
