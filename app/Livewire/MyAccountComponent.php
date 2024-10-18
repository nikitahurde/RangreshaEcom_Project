<?php

namespace App\Livewire;

use Livewire\Component;

class MyAccountComponent extends Component
{
    public function render()
    {
        return view('livewire.my-account-component')->layout('layouts.base');
    }
}
