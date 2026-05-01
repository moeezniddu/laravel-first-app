<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
// hello world
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([ProductSeeder::class]);
    }
}