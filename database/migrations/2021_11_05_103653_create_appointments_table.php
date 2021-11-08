<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('available_dates', function (Blueprint $table) {
            $table->id();
            $table->integer('therapist_id');
            $table->date('date_of_availability');
            $table->time('time_of_availability');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('therapist_id');
            $table->date('date_of_appointment');
            $table->time('time_of_appointment');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
