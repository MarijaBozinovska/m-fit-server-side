<?php

namespace Database\Seeders;

use App\Models\Shipment;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Shipment::query()
                ->create([
                    'address' => fake()->address,
                    'city' => fake()->city,
                    'country' => fake()->country,
                    'zip_code' => fake()->postcode,
                    'order_id' => fake()->numberBetween(1, 5),
                ]);
        }
    }
}
