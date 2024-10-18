<?php

namespace App\Livewire;

use Livewire\Component;

class CartCountComponent extends Component
{
    public $listeners = ['refreshComponent'=>'$refresh'];

    public function render()
    {
        return view('livewire.cart-count-component');
    }
}
