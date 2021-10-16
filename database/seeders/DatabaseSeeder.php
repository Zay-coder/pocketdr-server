<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //inserting most common challenges.
        DB::table('challenges')->insert([
           'name'=>'Depression'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Anxiety'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Stress'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Personality Development'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Geriatric'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Sex'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Addiction'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Sleep Deprivation'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Communication'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Behavior'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Educational'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Skills'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Social issues'
        ]);
        DB::table('challenges')->insert([
            'name'=>'Technology addiction'
        ]);


    }
}
