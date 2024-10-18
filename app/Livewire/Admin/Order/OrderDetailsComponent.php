<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = Order::find($this->order_id);
        // dd($order);
        $total = $order->orderItems->sum(function ($item) {
            return  $item->quantity;
        });
        return view('livewire.admin.order.order-details-component',compact('order','total'))->layout('layouts.admin');
    }
}
