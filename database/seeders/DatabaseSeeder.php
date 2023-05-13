<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Founder;
use App\Models\Brand;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::Truncate();
        Founder::Truncate();
        Brand::Truncate();
        Product::Truncate();

        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            FounderSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
