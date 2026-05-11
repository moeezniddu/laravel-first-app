<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
// this is database seeder function
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([ProductSeeder::class]);
    }
}
