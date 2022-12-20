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
            $train->azienda = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
            $train->stazione_partenza = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
            $train->stazione_arrivo = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
            $train->orario_partenza = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
            $train->orario_arrivo = $faker->numberBetween(2, 10);
            $train->codice_treno = $faker->numberBetween(2, 10);
            $train->numero_carrozze = $faker->numberBetween(2, 9);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}