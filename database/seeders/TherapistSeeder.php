<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('therapists')->insert([
            'first_name' => 'Magd',
            'last_name' => 'Hamdoun',
            'picture' => 'profile.jpeg',
            'Speciality' => 'CBT Specialist',
            'Years of Experience' => '20',
            'Session Price' => '50',
            'Bio' => 'I am Dr Madg Hamdoun, counsellor, psychotherapist and professor of counseling psychology,I am a specialist in CBT. through deep and compassionate cooperation with my diverse range of clients, i connect with broken hearts and broken self-images, inspiring clients to embark on a journey of rediscovery',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Millia',
            'last_name' => 'Al charek',
            'picture' => 'profile.jpeg',
            'Speciality' => 'Assistant Lecturer of Psychiatry',
            'Years of Experience' => '5',
            'Session Price' => '70',
            'Bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Miral',
            'last_name' => 'Hanna',
            'picture' => 'profile.jpeg',
            'Speciality' => 'Counseling Psychologist',
            'Years of Experience' => '6',
            'Session Price' => '70',
            'Bio' => "With a Master's of arts in counseling psychology from the American university in cairo, and training in cognitive behavior therapy from beck institute, i provide individual counseling to adolescents and adults. My first clinical internships were practiced at the behman hospital and al mashfa hospital where i was exposed to various clinical experiences. Later, I joined the psychology training center at AUC where i obtained more professional experience from counseling students,staff, faculty and alumni",
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Osama',
            'last_name' => 'Refaat',
            'picture' => 'profile.jpeg',
            'Speciality' => 'Professor of Psychiatry, Clinical Assessment',
            'Years of Experience' => '24',
            'Session Price' => '150',
            'Bio' => "As a Professor of Psychiatry at faculty of medicine, Cairo University, I obtained my PhD in 2007 working on cognitive functions of the elderly, i have been working with elderly psychiatric patients for over fifteen years and have shared in several research projects and training programs in codgnitive disorders like dementia. i am now the deputy of the head of old age psychiatry, in Kasr al Ainy psychiatry hospital, and was previously the deputy director of cairo university center for aging sciences.",
        ]);


    }
}
