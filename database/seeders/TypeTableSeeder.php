<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $stacks = ['Frontend', 'Backend', 'Fullstack'];
        foreach($stacks as $stack) {
        $newType = new Type();
        $newType->tipo = $faker->word();
        $newType->stack = $stack;
        $newType->save();
        }
    }
}
