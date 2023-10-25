<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            OrderItem::query()
                ->create([
                    'quantity' => fake()->numberBetween(1, 10),
                    'price' => fake()->numberBetween(10,100),
                    'order_id' => fake()->numberBetween(1,5),
                    'product_id' => fake()->numberBetween(1,5),
                ]);
        }
    }
}
