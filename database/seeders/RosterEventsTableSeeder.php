<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RosterEventsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roster_events')->insert([
            [
                'date' => '2025-03-10',
                'day' => 'Mon',
                'rev' => '0845',
                'dc' => '0745',
                'ci_l' => '0745',
                'ci_z' => '0745',
                'co_l' => null,
                'co_z' => null,
                'activity' => 'DX77',
                'remark' => 'DX 0077',
                'from' => 'KRP',
                'std_l' => '0945',
                'std_z' => '0845',
                'to' => 'CPH',
                'sta_l' => '1035',
                'sta_z' => '0935',
                'ac_hotel' => 'DO4',
                'blh' => null,
                'flight_time' => null,
                'night_time' => null,
                'duration' => null,
                'ext' => null,
                'pax_booked' => null,
                'ac_reg' => 'OYJRY',
                'crew_meal' => null,
                'resources' => null,
                'cc' => 'JBN',
                'name' => 'THH',
                'position' => 'CP (PIC)',
                'work_phone' => null,
                'dh_crew' => null,
                'dh_name' => null,
                'dh_seat' => null,
                'remarks' => null,
                'fdp_time' => '9:50',
                'max_fdp' => '12:00',
                'rest_compl' => '0655+1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more events here...
        ]);





        DB::table('roster_events')->insert([
            [
                'date' => '2022-01-16',
                'day' => 'Mon',
                'rev' => '0845',
                'dc' => '0745',
                'ci_l' => '0745',
                'ci_z' => '0745',
                'co_l' => null,
                'co_z' => null,
                'activity' => 'SBY',
                'remark' => 'SBY',
                'from' => 'KRP',
                'std_l' => '0945',
                'std_z' => '0845',
                'to' => 'CPH',
                'sta_l' => '1035',
                'sta_z' => '0935',
                'ac_hotel' => 'DO4',
                'blh' => null,
                'flight_time' => null,
                'night_time' => null,
                'duration' => null,
                'ext' => null,
                'pax_booked' => null,
                'ac_reg' => 'OYJRY',
                'crew_meal' => null,
                'resources' => null,
                'cc' => 'JBN',
                'name' => 'THH',
                'position' => 'CP (PIC)',
                'work_phone' => null,
                'dh_crew' => null,
                'dh_name' => null,
                'dh_seat' => null,
                'remarks' => null,
                'fdp_time' => '9:50',
                'max_fdp' => '12:00',
                'rest_compl' => '0655+1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more events here...
        ]);




        DB::table('roster_events')->insert([
            [
                'date' => '2022-01-19',
                'day' => 'Mon',
                'rev' => '0845',
                'dc' => '0745',
                'ci_l' => '0745',
                'ci_z' => '0745',
                'co_l' => null,
                'co_z' => null,
                'activity' => 'DX77',
                'remark' => 'DX 0077',
                'from' => 'KRP',
                'std_l' => '0945',
                'std_z' => '0845',
                'to' => 'CPH',
                'sta_l' => '1035',
                'sta_z' => '0935',
                'ac_hotel' => 'DO4',
                'blh' => null,
                'flight_time' => null,
                'night_time' => null,
                'duration' => null,
                'ext' => null,
                'pax_booked' => null,
                'ac_reg' => 'OYJRY',
                'crew_meal' => null,
                'resources' => null,
                'cc' => 'JBN',
                'name' => 'THH',
                'position' => 'CP (PIC)',
                'work_phone' => null,
                'dh_crew' => null,
                'dh_name' => null,
                'dh_seat' => null,
                'remarks' => null,
                'fdp_time' => '9:50',
                'max_fdp' => '12:00',
                'rest_compl' => '0655+1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more events here...
        ]);
    }
}
