<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Payment::query()
                ->create([
                    'amount' => fake()->numberBetween(10, 100),
                    'order_id' => fake()->numberBetween(1, 5),
                ]);
        }
    }
}
