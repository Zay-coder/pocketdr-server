<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Therapist;
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
    public function rating() {


    }


}
