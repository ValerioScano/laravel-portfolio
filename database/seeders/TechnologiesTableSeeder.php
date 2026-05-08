<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['PHP',
    'JavaScript',
    'Python',
    'Java',
    'C#',
    'TypeScript',
    'Ruby',
    'Swift',
    'Kotlin',
    'Go'];

    foreach($technologies as $technology) {
        $newTechnology = new Technology();
        $newTechnology->nome = $technology;
        $newTechnology->colore = $faker->hexColor();
        $newTechnology->save();

    }
    }
}
