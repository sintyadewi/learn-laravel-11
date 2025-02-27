<?php

namespace Database\Seeders\Unit;

use App\Modules\Unit\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::transaction(function () {
            Unit::insert($this->getData());
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
                'base_unit_id' => 1,
                'code' => 'carton',
                'name' => 'Carton',
                'amount' => 144,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'base_unit_id' => 1,
                'code' => 'dozen_box',
                'name' => 'Dozen Box',
                'amount' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'base_unit_id' => 1,
                'code' => 'two_dozen_box',
                'name' => 'Two Dozen Box',
                'amount' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'base_unit_id' => null,
                'code' => 'piece',
                'name' => 'Pcs',
                'amount' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
