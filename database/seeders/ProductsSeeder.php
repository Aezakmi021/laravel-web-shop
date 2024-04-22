<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];

        for ($i = 0; $i < 20; $i++) {
            $product = [
                'created_at' => now(),
                'updated_at' => now(),
                'product_name' => 'Product ' . ($i + 1),
                'product_count' => rand(1, 100),
                'product_description' => 'Description of Product ' . ($i + 1),
                'product_price' => number_format(rand(100, 10000) / 100, 2),
            ];
            $products[] = $product;
        }

        Product::insert($products);
    }
}
