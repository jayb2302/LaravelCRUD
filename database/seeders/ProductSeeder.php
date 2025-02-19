<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Product 1', 'detail' => 'Product 1 detail'],
            ['name' => 'Product 2', 'detail' => 'Product 2 detail'],
            ['name' => 'Product 3', 'detail' => 'Product 3 detail'],
            ['name' => 'Product 4', 'detail' => 'Product 4 detail'],
            ['name' => 'Product 5', 'detail' => 'Product 5 detail'],
            ['name' => 'Product 6', 'detail' => 'Product 6 detail'],
            ['name' => 'Product 7', 'detail' => 'Product 7 detail'],
            ['name' => 'Product 8', 'detail' => 'Product 8 detail'],
            ['name' => 'Product 9', 'detail' => 'Product 9 detail'],
            ['name' => 'Product 10', 'detail' => 'Product 10 detail'],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
