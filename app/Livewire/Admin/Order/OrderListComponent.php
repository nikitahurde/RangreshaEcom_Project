<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;

class OrderListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.order.order-list-component')->layout('layouts.admin');
    }
}
