<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'categories_products',
            'product_id',
            'categories_id');
    }
}
