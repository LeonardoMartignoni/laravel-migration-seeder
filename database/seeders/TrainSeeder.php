<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 12; $i++) {
            $new_train = new Train;
    
            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->words(2, true);
            $new_train->arrival_station = $faker->words(2, true);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(4, true);
            $new_train->coach_number = $faker->numberBetween(3, 11);
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
    
            $new_train->save();
        }
    }
}
