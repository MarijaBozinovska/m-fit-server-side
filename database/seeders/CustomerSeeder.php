<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Customer::query()
                ->create([
                    'first_name' => fake()->firstName,
                    'last_name' => fake()->lastName,
                    'email' => fake()->email,
                    'password' => fake()->password,
                    'address' => fake()->address,
                    'phone_number' => fake()->phoneNumber,
                ]);
        }
    }
}
