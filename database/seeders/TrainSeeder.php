<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train;

        $new_train->company = "Trenitalia";
        $new_train->departure_station = "Roma Termini";
        $new_train->arrival_station = "Roma Ostiense";
        $new_train->departure_time = "10:40:40";
        $new_train->arrival_time = "11:30:30";
        $new_train->train_code = "3384";
        $new_train->coach_number = "8";
        $new_train->in_time = "1";
        $new_train->cancelled = "0";

        $new_train->save();
    }
}
