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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('therapist_id')->references('id')->on('therapists');
            $table->date('date_of_appointment');
            $table->timestamps();
        });
        Schema::create('available dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('therapist_id')->references('id')->on('therapists');
            $table->date('date_of_availability');
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
