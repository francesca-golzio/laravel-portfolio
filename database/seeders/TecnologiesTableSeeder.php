<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TecnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tecnologies = ['HTML', 'CSS', 'JavaScript', 'PHP', 'SQL'];

        foreach($tecnologies as $tecnology) {

            $newTecnology = new Tecnology();
            $newTecnology->name = $tecnology;
            $newTecnology->description = $faker->sentence(10);
            $newTecnology->save();
        }
    }
}
