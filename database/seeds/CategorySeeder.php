<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newCategory = new Category();
            $newCategory->name = $faker->word();
            $newCategory->description = $faker->sentence(6);
            $newCategory->save();
        }
    }
}
