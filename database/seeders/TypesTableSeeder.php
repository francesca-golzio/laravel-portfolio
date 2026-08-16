<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 6; $i++)
        {
            $newType = new Type();

            $newType->name = $faker->word();
            $newType->description = $newType->name . ' blabla bla';
            $newType->save();
        }
    }
}
