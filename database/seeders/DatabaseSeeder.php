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

        $user = User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $u4 = User::create([
            'name'=>'Ana',
            'email'=>'ana@gmail.com',
            'password'=>bcrypt('ana123')
        ]);

        $f1 = Founder::create([
            'name'=>"Rihanna",
            'year_of_birth'=>1988,
            'profession'=>'singer'
        ]);

        $b1 = Brand::create([
            'name'=>'Fenty Beauty',
            'year_of_launch'=> 2017,
            'headquarters' =>'San Francisco',
            'founder_id'=>$f1->id,
        ]);

        $p1 = Product::create([
            'name'=>'Foundation',
            'description'=>'A soft matte, longwear foundation that features climate-adaptive technology to fight heat, sweat + shine',
            'shade'=>'nude',
            'brand_id'=>$b1->id,
            'user_id'=>$u4->id
        ]);

        $p2 = Product::create([
            'name' => 'Lipstick',
            'description' => 'The true matte formula glides on effortlessly and offers 8-hour wear without drying lips',
            'shade' => 'red',
            'brand_id'=>$b1->id,
            'user_id'=>$u4->id
        ]);

    }
}
