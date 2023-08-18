<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // Product::create([
        //     'name_product' => 'Sirup Yogas',
        //     'price' => 15000,
        //     'description' => 'Desc',
        //     'quantity'=>10,
        //     'image'=>'product-1.png',

        // ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-2.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-3.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-4.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-5.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-6.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-7.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-8.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-9.png',
            
        ]);
        \App\Models\Product::create([
            'name_product' => 'Sirup Yogas',
            'price' => 15000,
            'description' => 'Desc',
            'quantity'=>10,
            'image'=>'product-10.png',
            
        ]);
    }
}
