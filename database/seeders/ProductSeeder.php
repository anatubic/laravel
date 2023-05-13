<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Foundation',
                'description' => 'A soft matte, longwear foundation that features climate-adaptive technology to fight heat, sweat + shine',
                'shade' => 'nude',
                'user_id' => 1,
                'brand_id' => 1,
            ],
            [
                'name' => 'Lipstick',
                'description' => 'The true matte formula glides on effortlessly and offers 8-hour wear without drying lips',
                'shade' => 'red',
                'user_id' => 2,
                'brand_id' => 2,
            ],
            [
                'name' => 'Blush',
                'description' => 'A weightless, long-lasting liquid blush that blends and builds beautifully for a soft, healthy flush',
                'shade' => 'pink',
                'user_id' => 3,
                'brand_id' => 3,
            ],
        ];

        Product::insert($data);
    }
}
