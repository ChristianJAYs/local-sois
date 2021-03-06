<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TabularColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();
        $data = [
            ['tabular_table_id' => 1,
                'tabular_column_name' => '#',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Name of Award',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Certifying Body',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Place',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Date(mm/dd/yyyy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Level',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 1,
                'tabular_column_name' => 'Description of Supporting Documents Submitted',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],


            ['tabular_table_id' => 2,
                'tabular_column_name' => '#',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Title of the Program',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Place',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Date(mm/dd/yyyy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Level',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Number of Beneficiaries',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 2,
                'tabular_column_name' => 'Description of Supporting Documents Submitted',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],

            ['tabular_table_id' => 3,
                'tabular_column_name' => '#',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Department',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Name of Student (Surname, First Name, Middle Initial)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Title',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Classification',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Nature',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Budget (in PhP)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Source of Fund',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Organizer',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Level',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Venue',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'From (mm/dd/yy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'To (mm/dd/yy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Total No. of Hours',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 3,
                'tabular_column_name' => 'Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],

            ['tabular_table_id' => 4,
                'tabular_column_name' => '#',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Department',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Name of Student (Surname, First Name, Middle Initial)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Title',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Classification',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Nature',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Budget (in PhP)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Source of Fund',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Organizer',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Level',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Venue',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'From (mm/dd/yy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'To (mm/dd/yy)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Total No. of Hours',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            ['tabular_table_id' => 4,
                'tabular_column_name' => 'Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ];
        DB::table('tabular_columns')->insert($data);
    }
}
