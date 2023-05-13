<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Founder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Founder::create([
            'name' => "Rihanna",
            'year_of_birth' => 1988,
            'profession' => 'singer'
        ]); */
        $data = [
            [
                'name' => 'Rihanna',
                'year_of_birth' => 1988,
                'profession' => 'singer',
            ],
            [
                'name' => 'Kylie Jenner',
                'year_of_birth' => 1997,
                'profession' => 'entrepeneur',
            ],
            [
                'name' => 'Selena Gomez',
                'year_of_birth' => 1992,
                'profession' => 'singer',
            ],
        ];

        Founder::insert($data);
    }
}
