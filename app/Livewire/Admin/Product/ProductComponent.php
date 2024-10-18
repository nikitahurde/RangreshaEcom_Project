<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
    }
    
    public function render()
    {
        $products = Product::all();

        return view('livewire.admin.product.product-component',compact('products'))->layout('layouts.admin');
    }
}
