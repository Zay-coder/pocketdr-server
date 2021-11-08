<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Date;
use App\Models\Therapist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TherapistController extends Controller
{
    //api to get all therapists
    public function all_therapists() {
        $data = Therapist::all();
        return $data;

    }

    //api to get all adult therapists
    public function adult_therapists() {

        $data = DB::table("therapists")
                ->where("therapy_type", "like", "%"."Adult"."%")->get();

        return $data;

    }

    //api to get all child/adolescent therapists
    public function teen_therapists() {

        $data = DB::table("therapists")
            ->where("therapy_type", "like", "%"."Child/Adolescent"."%")->get();

        return $data;

    }


    //api to get all couple therapists
    public function couple_therapists() {

        $data = DB::table("therapists")
            ->where("therapy_type", "like", "%"."Couple/family"."%")->get();

        return $data;

    }

    //get specific therapist chosen by the client
    public function get_chosen_therapist($x) {

        $data = Therapist::find($x);
        return $data;

    }
    public function upvote($therapist_id) {
        $data = DB::table("therapists")
            ->select("id", "upvotes")
            ->where("id", "=", $therapist_id)
            ->increment("upvotes", 1);

        return $data;

    }

    public function downvote($therapist_id) {
        $data = DB::table("therapists")
            ->select("id", "downvotes")
            ->where("id", "=", $therapist_id)
            ->increment("downvotes", 1);

        return $data;

    }

    public function get_available_dates($therapist_id) {

        $data = DB::table("available_dates")
            ->select("id","date_of_availability", "time_of_availability")
            ->where([["therapist_id", "=", $therapist_id],["status", "=", 0]])
            ->get();

        return $data;

    }

    public function sendAppointment(Request $request) {
        Appointment::insert([
            'user_id' => $request->user_id,
            'therapist_id' => $request->therapist_id,
            'date_of_appointment' =>  $request->date_of_appointment,
            'time_of_appointment' =>  $request->time_of_appointment,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        $available_dates = Date::find($request->appointment_id);
        $available_dates->status=1;
        $available_dates->save();

        return response()->json([
            'status' => true,
            'message' => 'Appointment successfully booked',
        ], 201);


    }



}
