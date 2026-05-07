<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->titolo = implode(' ', $faker->words(2)); 
            $newProject->link = $faker->url();
            $newProject->committente = $faker->company();
            $newProject->consegna = $faker->date();
            $newProject->type_id= rand(1,3);
            $newProject->save();
        }
    }
}
