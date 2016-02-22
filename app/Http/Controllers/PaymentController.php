<?php

namespace HMS\Http\Controllers;

use Cartalyst\Stripe\Stripe;
//use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JulioBitencourt\Cart\Cart;

use HMS\Http\Requests;
use HMS\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
        $this->middleware('auth');
    }

    public function showCheckout() {
        return view('checkout')->with('items', $this->cart->all())
            ->with('total', $this->cart->total());
//        return $this->cart->all();
    }

    public function placeOrder(){

    }

    public function showCardForm(){
        return view('pay');
    }

    public function pay(){
        dd(Input::all());
    }
}
