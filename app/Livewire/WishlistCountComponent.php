<?php

namespace App\Livewire;

use Livewire\Component;
use Cart;


class WishlistCountComponent extends Component
{
    public $wishlistCount;

    protected $listeners = ['wishlistUpdated'];

    public function mount()
    {
        $this->wishlistCount = Cart::instance('wishlist')->count();
    }

    public function wishlistUpdated()
    {
        $this->wishlistCount = Cart::instance('wishlist')->count();
    }

    public function render()
    {
        return view('livewire.wishlist-count-component');
    }
}
