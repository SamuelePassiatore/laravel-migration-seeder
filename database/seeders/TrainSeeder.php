<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 25; $i++) {
            $train = new Train();
            $train->date = '2023-02-27';
            $train->company = $faker->company();
            $train->departure_station = $faker->city() . ' Station';
            $train->arrival_station = $faker->city() . ' Station';
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean8();
            $train->carriages_number = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
