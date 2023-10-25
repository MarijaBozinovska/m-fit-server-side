<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Order::query()
                ->create([
                    'price' => fake()->numberBetween(10, 100),
                    'customer_id' => fake()->numberBetween(1, 5),
                ]);
        }
    }
}
