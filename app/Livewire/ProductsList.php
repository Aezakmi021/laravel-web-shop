<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductsList extends Component
{


    public $products;

    public function delete()
    {

    }

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products-list');
    }
}
