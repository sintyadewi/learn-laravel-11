<?php

namespace Database\Seeders;

use Database\Seeders\Unit\BaseUnitSeeder;
use Database\Seeders\Unit\UnitSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BaseUnitSeeder::class,
            UnitSeeder::class,
        ]);
    }
}
