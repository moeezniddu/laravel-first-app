<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'product_id'      => $faker->unique()->numerify('PROD-###'),
                'name'            => $faker->words(2, true),
                'description'     => $faker->sentence(),
                'price'           => $faker->randomFloat(2, 10, 500),
                'quantity'        => $faker->numberBetween(1, 100),
                'expiration_date' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
            ]);
        }
    }
}