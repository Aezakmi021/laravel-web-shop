<?php

namespace App\Livewire;

use Livewire\Component;

class ProductsList extends Component
{


    public $products = [];

    public function delete()
    {

    }

    public function render()
    {

        for ($i = 0; $i < 20; $i++) {
            $product = [
                'id' => $i + 1,
                'created_at' => now(), // Assuming you're using Laravel, otherwise replace with appropriate datetime
                'updated_at' => now(), // Assuming you're using Laravel, otherwise replace with appropriate datetime
                'product_name' => 'Product ' . ($i + 1),
                'product_count' => rand(1, 100), // Random product count between 1 and 100
                'product_description' => 'Description of Product ' . ($i + 1),
                'product_price' => number_format(rand(100, 10000) / 100, 2), // Random product price with two decimal places
            ];
            $this->products[] = $product;
        }

        return view('livewire.products-list');
    }
}
