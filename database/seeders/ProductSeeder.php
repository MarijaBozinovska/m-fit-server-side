<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Product::query()
                ->create([
                    'title' => fake()->title,
                    'description' => fake()->text,
                    'image' => fake()->image,
                    'price' => fake()->numberBetween(10, 100),
                    'stock' => fake()->numberBetween(10, 100),
                ]);
        }
    }
}
