<?php

namespace App\Livewire;

use Cart;
use session;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Hash;

class CheckoutComponent extends Component
{
    public $firstname;
    public $lastname;
    public $address;
    public $city;
    public $state;
    public $zipcode;
    public $email;
    public $phone;
    public $paymentmode;

    public function updated($fields)
    {
     $this->validateOnly($fields,[
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'zipcode' => 'required',
     ]); 
        
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'zipcode' => 'required',
        ]);
        
        $users = new User;
        $users->name = $this->firstname;
        $users->email = $this->email;
        $users->password = Hash::make($this->phone);
        $users->save();
// dd($users);
        $order = new Order();
        $order->user_id = User::all()->last()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        // $order->total = session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->address = $this->address;
        $order->city = $this->city;
        $order->state = $this->state;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->zipcode = $this->zipcode;
        $order->status = 'ordered';
        $order->save();
// dd($order);
        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
 
        $transaction = new Transaction();
    $transaction->user_id = User::all()->last()->id;
    $transaction->order_id = $order->id;
    
    // Adjust the payment mode based on the selected option
    $transaction->mode = ($this->paymentmode == 'upi') ? 'upi' : 'cod';
    // $transaction->mode = 'cod';

    // If you want to set the status, do it here
    $transaction->status = 'pending';

    $transaction->save();
    // dd($transaction);
    // dd($order,$transaction);
        foreach (Cart::instance('cart')->content() as $item) {
            $product = Product::find($item->id);
        
            if ($product->stock > 0 && $product->stock >= $item->qty) {
                $product->stock = $product->stock - $item->qty;
                $product->save();
            }
        }
        Cart::instance('cart')->destroy();
        // session()->forget('checkout');
        return redirect()->route('thankyou');   
    }


    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
