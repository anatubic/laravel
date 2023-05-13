<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Fenty Beauty',
                'year_of_launch' => 2017,
                'headquarters' => 'San Francisco',
                'founder_id' => 1,
            ],
            [
                'name' => 'Kylie Cosmetics',
                'year_of_launch' => 2015,
                'headquarters' => 'Oxnard',
                'founder_id' => 2,
            ],
            [
                'name' => 'Rare Beauty',
                'year_of_launch' => 2020,
                'headquarters' => 'El Segundo',
                'founder_id' => 3,
            ],
        ];

        Brand::insert($data);
    }
}
