<?php

namespace App\Livewire;

use Cart;
use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;

class ProductDetailComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\\Models\\Product');              
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('cart');
    }  

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')
            ->add($product_id, $product_name, 1, $product_price)
            ->associate('App\Models\Product');
            session()->flash('success_message','Item added in Wishlist');
            return redirect()->route('wishlist');
        // $this->emit('wishlistUpdated');
    }
    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                // $this->emit('updateWishlistCount'); // Emit event to update wishlist count
                return;
            }
        }
    }

    public function render()
    {
        $products = Product::where('slug',$this->slug)->get()->unique('slug');
        $related_products = Product::with('category')->where('slug', '!=', $this->slug)->inRandomOrder()->get();
        $sale = Sale::find(1);
        return view('livewire.product-detail-component',compact('products','related_products','sale'))->layout('layouts.base');
    }
}
