<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceptenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  @return void
     */


    public function run(): void
    {
        $recipes = [
            [
                'naam' => 'Spaghetti Bolognese',
                'kort_beschrijving' => 'Classic Italian pasta dish with meaty tomato sauce.',
                'afbeelding' => 'spaghetti_bolognese.jpg',
            ],
            [
                'naam' => 'Chicken Stir Fry',
                'kort_beschrijving' => 'Healthy and delicious chicken stir fry with vegetables.',
                'afbeelding' => 'chicken_stir_fry.jpg',
            ],
            [
                'naam' => 'Vegetable Curry',
                'kort_beschrijving' => 'A flavorful vegetarian curry with mixed vegetables.',
                'afbeelding' => 'vegetable_curry.jpg',
            ],
            // Add more recipes as needed
        ];

        // Insert seed data into the recepten table
        foreach ($recipes as $recipe) {
            DB::table('recepten')->insert([
                'naam' => $recipe['naam'],
                'kort_beschrijving' => $recipe['kort_beschrijving'],
                'afbeelding' => $recipe['afbeelding'],
                'last_used_at' => now(),
                'expires_at' => now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }

}
