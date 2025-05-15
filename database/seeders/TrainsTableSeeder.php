<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        // creo un array per le compagnie
        $company = ["Trenitalia", "Italo"];

        // creo un array di città realistico
        $cities = ["Napoli Centrale", "Bologna Centrale", "Roma Termini", "Milano Centrale", "Bergamo", "Firenze SMN", "Salerno", "Torino Porta Susa", "Venezia S. Lucia"];

        for ($i = 0; $i < 5; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->randomElement($company);
            $newTrain->departure_station = $faker->randomElement($cities);
            $newTrain->arrival_station = $faker->randomElement($cities);
            while ($newTrain->arrival_station === $newTrain->departure_station) {
                $newTrain->arrival_station = $faker->randomElement($cities);
            }
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+10 hour');
            $newTrain->arrival_time = $faker->dateTimeBetween('+10 hour', '+22 hours');
            $newTrain->train_code = strtoupper($faker->bothify('??###'));
            $newTrain->carriages_number = $faker->numberBetween(5, 12);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
