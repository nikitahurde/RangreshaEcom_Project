<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Cart;

class ProductCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
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
        $categoryProduct = Product::where('category_id',$this->category_id)->get();
        $categorys = Category::all();
        return view('livewire.product-category-component',compact('categoryProduct','categorys'))->layout('layouts.base');
    }
}
