<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Challenge;


class ChallengeController extends Controller
{
    public function adult_challenges() {
        $data = Challenge::select('name')->whereBetween('id', [1,8])->get();
        return $data;

    }

    public function teen_challenges() {
        $data = Challenge::select('name')->whereBetween('id', [8,14])->get();
        return $data;

    }

}
