<?php

namespace App\Livewire;

use Cart;
use session;
use App\Models\Sale;
use Livewire\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    // public $wishlistCount;

    public $popularproducts;

    public function mount()
    {
        // Retrieve all products initially
        $this->popularproducts = Product::orderBy('popular_pro', 'desc')->take(6)->get();  
        // $this->wishlistCount = Cart::instance('wishlist')->count();
    }

    public function showPopular()
    {
        // Fetch popular products
        $this->popularproducts = Product::orderBy('popular_pro', 'desc')->take(6)->get();
    }


    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');              
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('cart');
        // $this->emitTo('cart-count-component', 'refreshComponent');
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
        $products = Product::all();
        $category = Category::all();
        $sale = Sale::find(1);
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);

        return view('livewire.home-component',compact('products','category','sale','sproducts'))->layout('layouts.base');
    }
}
