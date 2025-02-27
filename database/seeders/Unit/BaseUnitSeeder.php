<?php

namespace Database\Seeders\Unit;

use App\Modules\Unit\Models\BaseUnit;
use Illuminate\Database\Seeder;

class BaseUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::transaction(function () {
            BaseUnit::insert($this->getData());
        });
    }

    /**
     * Get the data
     *
     * @return array<int,array<string,string>>
     */
    protected function getData()
    {
        return [
            [
                'code' => 'piece',
                'name' => 'piece',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'pair',
                'name' => 'pair',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'bottle',
                'name' => 'bottle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'glass',
                'name' => 'glass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
