<?php

namespace App\Livewire;

use Livewire\Component;
use Cart;

class WishlistComponent extends Component
{
    public function removeFormWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                // $this->emitTo('wishlist-count-component', 'refreshComponent');
                // $this->emitTo('wishlist-count-mocomponent', 'refreshComponent');

                // $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Item Removed from Wishlist!']);

                return;
            }
        }
    }

    public function moveProductFormWishlistToCart($rowId)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')
            ->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');
        //     $this->emitTo('wishlist-count-component', 'refreshComponent');
        //     $this->emitTo('wishlist-count-mocomponent', 'refreshComponent');

        // $this->emitTo('cart-count-component', 'refreshComponent');
        // $this->emitTo('cart-count-mocomponent', 'refreshComponent');

        // $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Item Moved to cart!']);

    }



    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
