<?php

namespace Database\Seeders\Product;

use App\Modules\Product\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::transaction(function () {
            ProductCategory::insert($this->getData());
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
                'name' => 'Air mineral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Perawatan tubuh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makanan ringan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk kebersihan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
