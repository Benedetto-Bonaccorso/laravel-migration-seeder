<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->text();
            $train->stazione_partenza = $faker->text();
            $train->stazione_arrivo = $faker->text();
            $train->orario_di_partenza = $faker->text();
            $train->orario_arrivo = $faker->numberBetween(2, 10);
            $train->codice_treno = $faker->numberBetween(2, 10);
            $train->Numero_carrozze = $faker->numberBetween(2, 9);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}