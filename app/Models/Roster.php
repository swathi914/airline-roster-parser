<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $table = 'roster_events';

    protected $fillable = [
        'date',
        'day',
        'rev',
        'dc',
        'ci_l',
        'ci_z',
        'co_l',
        'co_z',
        'activity',
        'remark',
        'from',
        'std_l',
        'std_z',
        'to',
        'sta_l',
        'sta_z',
        'ac_hotel',
        'blh',
        'flight_time',
        'night_time',
        'duration',
        'ext',
        'pax_booked',
        'ac_reg',
        'crew_meal',
        'resources',
        'cc',
        'name',
        'position',
        'work_phone',
        'dh_crew',
        'dh_name',
        'dh_seat',
        'remarks',
        'fdp_time',
        'max_fdp',
        'rest_compl',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
