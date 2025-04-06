<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roster_events', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('day')->nullable();
            $table->string('rev')->nullable();
            $table->string('dc')->nullable();
            $table->string('ci_l')->nullable();
            $table->string('ci_z')->nullable();
            $table->string('co_l')->nullable();
            $table->string('co_z')->nullable();
            $table->string('activity')->nullable();
            $table->string('remark')->nullable();
            $table->string('from')->nullable();
            $table->string('std_l')->nullable();
            $table->string('std_z')->nullable();
            $table->string('to')->nullable();
            $table->string('sta_l')->nullable();
            $table->string('sta_z')->nullable();
            $table->string('ac_hotel')->nullable();
            $table->string('blh')->nullable();
            $table->string('flight_time')->nullable();
            $table->string('night_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('ext')->nullable();
            $table->string('pax_booked')->nullable();
            $table->string('ac_reg')->nullable();
            $table->string('crew_meal')->nullable();
            $table->string('resources')->nullable();
            $table->string('cc')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('dh_crew')->nullable();
            $table->string('dh_name')->nullable();
            $table->string('dh_seat')->nullable();
            $table->string('remarks')->nullable();
            $table->string('fdp_time')->nullable();
            $table->string('max_fdp')->nullable();
            $table->string('rest_compl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roster_events');
    }
};
