<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name'=> Str::random(10),
            'product_description' => Str::random(20),
            'product_material'=> Str::random(7). '@gmail.com',
            'product_category'=>Str:: random(7),
            'quantity'=> Str::random(7),
            'product_price'=> Str::random(7),
            'product_weight' => Str::random(5),
            'product_size' => Str::random(7),
            'product_image' => Str::random(7)
        ]);

        DB::table('products')->insert([
            'product_name'=> Str::random(10),
            'product_description' => Str::random(20),
            'product_material'=> Str::random(7). '@gmail.com',
            'product_category'=>Str:: random(7),
            'quantity'=> Str::random(7),
            'product_price'=> Str::random(7),
            'product_weight' => Str::random(5),
            'product_size' => Str::random(7),
            'product_image' => Str::random(7),
        ]);

        DB::table('products')->insert([
            'product_name'=> Str::random(10),
            'product_description' => Str::random(20),
            'product_material'=> Str::random(7). '@gmail.com',
            'product_category'=>Str:: random(7),
            'quantity'=> Str::random(7),
            'product_price'=> Str::random(7),
            'product_weight' => Str::random(5),
            'product_size' => Str::random(7),
            'product_image' => Str::random(7)
        ]);
    }
}
