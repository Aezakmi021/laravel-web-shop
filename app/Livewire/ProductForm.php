<?php

namespace App\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class ProductForm extends Component
{
    public $product = 10;
    public $first_name;
    public $last_name;
    public $email;
    public $content;
    protected $rules = [
        'first_name' => 'required | min:3',
        'last_name' => 'required',
        'email' => 'required | email',
        'content' => 'required',
    ];

    public function submitForm(){
        $this->validate($this->rules);
    }
    public function render()
    {
        return view('livewire.product-form');
    }


}
