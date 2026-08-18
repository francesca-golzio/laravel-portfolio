<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['HTML', 'CSS', 'JavaScript', 'PHP', 'SQL'];

        foreach($technologies as $technology) {

            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->description = $faker->sentence(10);
            $newTechnology->save();
        }
    }
}
