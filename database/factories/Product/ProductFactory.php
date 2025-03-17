<?php

namespace Database\Factories\Product;

use App\Modules\Product\Models\Product;
use App\Modules\Product\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryId = $this->faker->randomElement(ProductCategory::pluck('id'));
        $code = $this->faker->numberBetween(1, 20000);

        $items = match ($categoryId) {
            1 => $this->getMineralWater(),
            2 => $this->getBodyCare(),
            3 => $this->getSnack(),
            4 => $this->getCleaningSupply(),
        };

        return [
            'category_id' => $categoryId,
            'code' => $code,
            'name' => $this->faker->randomElement($items).' - '.$code,
        ];
    }

    protected function getMineralWater()
    {
        return [
            'Aqua', 'Cleo', 'Nestle Pure Life', 'Le Minerale', 'Voss',
            'Evian', 'Smart Water', 'Aqua Reflections', 'Alami', 'Cimory',
            'San Pellegrino', 'Soda Springs', 'Fiji', 'Buavita', 'Ades',
            'Aqua Tranquillo', 'Pristine', 'Dasani', 'Volvic', 'Perrier',
            'Bali Water', 'Aquafina', 'Alkaline Water', 'Mountain Valley', 'Acqua Panna', 'Oasis',
        ];
    }

    protected function getBodyCare()
    {
        return [
            'Sampo', 'Pasta Gigi', 'Sabun Mandi', 'Deodoran', 'Lotion Tubuh',
            'Minyak Aromaterapi', 'Body Scrub', 'Shower Gel', 'Face Wash', 'Pelembap Wajah',
            'Pembersih Wajah', 'Toner Wajah', 'Masker Wajah', 'Pelembap Tangan', 'Pelembap Kaki',
            'Body Butter', 'Minyak Zaitun', 'Pembersih Makeup', 'Sunblock', 'Pelembap Bibir',
            'Kondisioner', 'Gel Pembersih', 'Pembersih Telinga', 'Krim Anti-Aging', 'Krim Malam', 'Krim Pagi',
        ];
    }

    protected function getSnack()
    {
        return [
            'Pringles', 'Lays', 'Cheetos', 'Chitato', 'Mikado',
            'Taro', 'Garuda', 'Kacang Garuda', 'Oreo', 'Krispy Kreme',
            'Tuc', 'Nabati', 'Gery', 'Good Time', 'Kacang Dua Kelinci',
            'Cimory', 'Qtela', 'Biskuit Marie', 'Chipsmore', 'Lotte',
            'Malkist', 'Selamat', 'Siip', 'Biskuat', 'Tango', 'Pocky',
        ];
    }

    protected function getCleaningSupply()
    {
        return [
            'Top', 'Sunlight', 'So Klin', 'Wipol', 'Pine O Cleen',
            'Attack', 'Dettol', 'Vanish', 'Cif', 'Sleek',
            'Klin', 'Pristine', 'Mr. Muscle', 'Ajax', 'Harpic',
            'Bayclin', 'Lysol', 'Omo', 'Amway', 'Scrub Daddy',
            'Clorox', 'Breeze', 'Finish', 'Glad', 'Swiffer', 'Arm & Hammer',
        ];
    }
}
