<?php

namespace HMS\Http\Controllers;

use Illuminate\Http\Request;

use HMS\Http\Requests;
use HMS\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use JulioBitencourt\Cart\Cart;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function showCart() {

        return view('cartitems')->with('items', $this->cart->all());
    }

    public function addToCart() {
        $room_type = Input::get('room_type');

        $cart = DB::table('hostels')
            ->leftJoin('rooms','hostels.id', '=', 'rooms.hostel_id')
            ->select('hostels.name', 'hostels.slug', 'rooms.room_type', 'rooms.price')
            ->where('rooms.room_type', '=', $room_type)
            ->where('rooms.hostel_id', '=', Input::get('hostel_id'))
            ->where('rooms.occupied', '=', 0)->limit(1)->get();


        $item =[
            'sku' => $cart[0]->slug,
            'description' => $cart[0]->room_type,
            'price' => $cart[0]->price,
            'quantity' => Input::get('quantity')
        ];

        $this->cart->insert($item);
//        $this->cart->destroy();

        return redirect('cart/cartitems');
//        return $cart;
    }
}
