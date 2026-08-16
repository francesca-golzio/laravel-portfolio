<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {        
        for($i = 0; $i < 6; $i++) {
            $newProject = new Project();

            $newProject->title = $faker->sentence(3);
            $newProject->client = $faker->name() . ' ' . $faker->lastName() . ' (' . $faker->company() . ')';
            $newProject->period = $faker->monthName() . ' ' . $faker->year();
            $newProject->type_id = rand(1, 6);
            $newProject->tags = ['Web App', 'Back End', 'Laravel'];
            $newProject->description = "{$faker->paragraph(14)}";
            $newProject->personal_note = "{$faker->paragraph(5)}";

            $newProject->save();
        }
    }
}
