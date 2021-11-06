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
            $table->foreignId('therapist_id')->references('id')->on('therapists');
            $table->date('date_of_availability');
            $table->time('time_of_availability');
            $table->timestamps();
        });
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('therapist_id')->references('id')->on('therapists');
            $table->date('date_of_appointment');
            $table->foreignId('time_of_appointment')->references('time_of_availability')->on('available_dates');
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
