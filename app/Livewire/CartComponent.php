<?php

namespace App\Livewire;

use Cart;
use Carbon\Carbon;
use App\Models\Coupon;
use Livewire\Component;

class CartComponent extends Component
{
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;
    
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        // $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Item Added In Cart!']);

        // $this->emitTo('cart-count-component', 'refreshComponent');
        // $this->emitTo('cart-count-mocomponent', 'refreshComponent');

    }
    public function decreaseQuentity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        // $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Item Removed In Cart!']);

        // $this->emitTo('cart-count-component', 'refreshComponent');
        // $this->emitTo('cart-count-mocomponent', 'refreshComponent');

    }   
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        // $this->emitTo('cart-count-component', 'refreshComponent');
        // $this->emitTo('cart-count-mocomponent', 'refreshComponent');

        // $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Remove Cart Item!']);

        // session()->flash('message', 'Remove Cart Item');
    }

    public function applyCouponCode()
    {
        $coupon = Coupon::where('code', $this->couponCode)
            ->where('expiry_date', '>=', Carbon::today())
            ->where('cart_value', '<=', Cart::instance('cart')->subtotal())
            ->first();
       if (!$coupon) {
            session()->flash('coupon_messages', 'Coupon code is invalid!');
            return;
        }else{
            session()->flash('success_message', 'Congratulations! Your coupon is successfully applied');
        }
        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
        ]);
    }

    public function calculateDiscounts()
    {
        if (session()->has('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value']) / 100;
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax')) / 100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }

    public function setAmountForCheckout()
    {
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }

        if (session()->has('coupon')) {
            session()->put('checkout', [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount,
            ]);
        } else {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
    }

    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->calculateDiscounts();
            }
        }
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
