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
            'occupation'=>'singer'
        ]);

        $f2 = Founder::create([
            'name'=>"Kylie Jenner",
            'year_of_birth'=>1997,
            'occupation'=>'entrepeneur'
        ]);

        $f3 = Founder::create([
            'name'=>"Selena Gomez",
            'year_of_birth'=>1992,
            'occupation'=>'singer'
        ]);

        $f4 = Founder::create([
            'name'=>"Ariana Grande",
            'year_of_birth'=>1993,
            'occupation'=>'singer'
        ]);

        $f5 = Founder::create([
            'name'=>"Hailey Bieber",
            'year_of_birth'=>1996,
            'occupation'=>'model'
        ]);

        $f6 = Founder::create([
            'name'=>"Millie Bobby Brown",
            'year_of_birth'=>2004,
            'occupation'=>'actress'
        ]);

        $b1 = Brand::create([
            'name'=>'Fenty Beauty',
            'year_of_launch'=> 2017,
            'headquarters' =>'San Francisco',
            'founder_id'=>$f1->id,
        ]);

        $b2 = Brand::create([
            'name'=>'Kylie Cosmetics',
            'year_of_launch'=> 2015,
            'headquarters' =>'Oxnard',
            'founder_id'=>$f2->id,
        ]);

        $b3 = Brand::create([
            'name'=>'Kylie Skin',
            'year_of_launch'=> 2019,
            'headquarters' =>'Oxnard',
            'founder_id'=>$f2->id,
        ]);

        $b4 = Brand::create([
            'name'=>'Fenty Skin',
            'year_of_launch'=> 2018,
            'headquarters' =>'San Francisco',
            'founder_id'=>$f1->id,
        ]);

        $b5 = Brand::create([
            'name'=>'Rare Beauty',
            'year_of_launch'=> 2020,
            'headquarters' =>'El Segundo',
            'founder_id'=>$f3->id,
        ]);

        $b6 = Brand::create([
            'name'=>'REM Beauty',
            'year_of_launch'=> 2021,
            'headquarters' =>'Pacoima',
            'founder_id'=>$f4->id,
        ]);

        $b7 = Brand::create([
            'name'=>'Rhode Skin',
            'year_of_launch'=> 2022,
            'headquarters' =>'Beverly Hills',
            'founder_id'=>$f5->id,
        ]);

        $b8 = Brand::create([
            'name'=>'Florence by Mills',
            'year_of_launch'=> 2021,
            'headquarters' =>'San Francisco',
            'founder_id'=>$f6->id,
        ]);

        $p1 = Product::create([
            'name'=>'Foundation',
            'shade'=>'Neutral',
            'description'=>'A soft matte, longwear foundation that features climate-adaptive technology to fight heat, sweat + shine',
            'purchased_at'=>'Sephora',
            'day_of_purchase'=>'2023-05-01',
            'brand_id'=>$b1->id,
            'user_id'=>$u4->id
        ]);

        $p2 = Product::create([
            'name' => 'Lipstick',
            'shade' => 'Brown Sugar',
            'description' => 'The true matte formula glides on effortlessly and offers 8-hour wear without drying lips',
            'purchased_at'=>'Ulta',
            'day_of_purchase'=>'2023-01-12',
            'brand_id'=>$b2->id,
            'user_id'=>$u4->id
        ]);

        $p3 = Product::create([
            'name' => 'Eye Cream',
            'shade' => 'Clear',
            'description' => 'Eye Cream helps brighten, hydrate, and reduce the look of puffiness and dark circles',
            'purchased_at'=>'online',
            'day_of_purchase'=>'2022-03-02',
            'brand_id'=>$b3->id,
            'user_id'=>$u4->id
        ]);

        $p4 = Product::create([
            'name' => 'Moisturizer',
            'shade' => 'Clear',
            'description' => 'Moisturizer locks in fresh hydration, fades the look of dark spots and defends against pollution',
            'purchased_at'=>'online',
            'day_of_purchase'=>'2023-01-12',
            'brand_id'=>$b4->id,
            'user_id'=>$u4->id
        ]);

        $p5 = Product::create([
            'name' => 'Blush',
            'shade' => 'Love',
            'description' => 'A weightless, long-lasting liquid blush that blends and builds beautifully for a soft, healthy flush',
            'purchased_at'=>'Sephora',
            'day_of_purchase'=>'2022-07-21',
            'brand_id'=>$b5->id,
            'user_id'=>$u4->id
        ]);

        $p6 = Product::create([
            'name' => 'Highlighter',
            'shade' => 'Miss Saturn',
            'description' => 'Interstellar highlighter topper offers a next-level, multi-dimensional highlight for cheeks, eyes, and body that glides on like a second skin',
            'purchased_at'=>'Ulta',
            'day_of_purchase'=>'2023-01-16',
            'brand_id'=>$b6->id,
            'user_id'=>$u4->id
        ]);

        $p7 = Product::create([
            'name' => 'Barrier Restore Cream',
            'shade' => 'Clear',
            'description' => 'Rich, but lightweight, cream moisturizer to comfort, soothe, and restore the skin barrier',
            'purchased_at'=>'online',
            'day_of_purchase'=>'2022-08-01',
            'brand_id'=>$b7->id,
            'user_id'=>$u4->id
        ]);

        $p8 = Product::create([
            'name' => 'Face Mist',
            'shade' => 'Clear',
            'description' => 'Designed to help stressed skin feel chill, this rose mist is infused with antioxidant-packed thyme, seaweed, lavender and rose to calm and hydrate',
            'purchased_at'=>'online',
            'day_of_purchase'=>'2022-02-02',
            'brand_id'=>$b8->id,
            'user_id'=>$u4->id
        ]);
    }
}
