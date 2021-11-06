<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding therapists
        DB::table('therapists')->insert([
            'first_name' => 'Charbel',
            'last_name' => 'Bechara',
            'picture' => 'https://randomuser.me/api/portraits/men/61.jpg ',
            'speciality' => 'CBT Specialist',
            'therapy_type' => 'Adult',
            'yof' => '2',
            'price' => '50',
            'bio' => 'I am Dr Madg Hamdoun, counsellor, psychotherapist and professor of counseling psychology,I am a specialist in CBT. through deep and compassionate cooperation with my diverse range of clients, i connect with broken hearts and broken self-images, inspiring clients to embark on a journey of rediscovery',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Barathrum',
            'last_name' => 'Dagher',
            'picture' => 'https://randomuser.me/api/portraits/men/82.jpg',
            'speciality' => 'Cognitive Behavior',
            'therapy_type' => 'Adult',
            'yof' => '5',
            'price' => '70',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Millia',
            'last_name' => 'Al charek',
            'picture' => 'https://randomuser.me/api/portraits/women/75.jpg',
            'speciality' => 'Lecturer of Psychiatry',
            'therapy_type' => 'Adult',
            'yof' => '6',
            'price' => '70',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Ammar',
            'last_name' => 'Olfat',
            'picture' => 'https://randomuser.me/api/portraits/men/50.jpg',
            'speciality' => 'Hallucinations and disorders',
            'therapy_type' => 'Adult',
            'yof' => '7',
            'price' => '60',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Vanessa',
            'last_name' => 'Khawand',
            'picture' => 'https://randomuser.me/api/portraits/women/47.jpg',
            'speciality' => 'Body language and positivity',
            'therapy_type' => 'Adult',
            'yof' => '15',
            'price' => '70',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Kayla',
            'last_name' => 'Madrid',
            'picture' => 'https://randomuser.me/api/portraits/women/82.jpg',
            'speciality' => 'Anger Management',
            'therapy_type' => 'Adult',
            'yof' => '4',
            'price' => '80',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Fouad',
            'last_name' => 'Yammine',
            'picture' => 'https://randomuser.me/api/portraits/men/7.jpg',
            'speciality' => 'Physical state management',
            'therapy_type' => 'Adult',
            'yof' => '9',
            'price' => '40',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Samuel',
            'last_name' => 'Jesser',
            'picture' => 'https://randomuser.me/api/portraits/men/20.jpg',
            'speciality' => 'Intimacy and Sex specialist',
            'therapy_type' => 'Adult',
            'yof' => '4',
            'price' => '30',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Osama',
            'last_name' => 'Jaafar',
            'picture' => 'https://randomuser.me/api/portraits/men/31.jpg',
            'speciality' => 'Addiction and Limitations',
            'therapy_type' => 'Adult',
            'yof' => '1',
            'price' => '20',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Nathalia',
            'last_name' => 'Lakis',
            'picture' => 'https://randomuser.me/api/portraits/women/85.jpg',
            'speciality' => 'Positive mental attitude',
            'therapy_type' => 'Adult',
            'yof' => '2',
            'price' => '30',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);
        DB::table('therapists')->insert([
            'first_name' => 'Tatiana',
            'last_name' => 'Maraai',
            'picture' => 'https://randomuser.me/api/portraits/women/23.jpg',
            'speciality' => 'Body acceptance and confidence',
            'therapy_type' => 'Adult',
            'yof' => '7',
            'price' => '50',
            'bio' => 'I am an assistant lecturer of psychiatry at kast alainy, Cairo university. I received my degree working with patients with borderline personality disorder, i have been practicing psychiatry and psychotherapy for four years. i spent three years as a psychiatry resident in kasr alainy psychiatry and addiction hospital',
        ]);




        //seeding available dates
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '2',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '3',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '4',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '5',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '6',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '7',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '8',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '9',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '10',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('08','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('09','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('10','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('11','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('12','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('13','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '1',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('14','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('15','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('16','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('17','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('18','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('19','00','00'),

        ]);
        DB::table('available_dates')->insert([
            'therapist_id' => '11',
            'date_of_availability' => Carbon::create('2021', '12', '01'),
            'time_of_availability' => Carbon::createFromTime('20','00','00'),

        ]);







    }
}
