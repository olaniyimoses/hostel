<?php

namespace HMS\Http\Controllers;
use HMS\Hostel;
use HMS\Room;
use Illuminate\Http\Request;

use HMS\Http\Requests;
use HMS\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use JulioBitencourt\Cart\Cart;
use Session;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
        $this->data = array();
//        $this->items = $this->cart->all();
    }

    public function showCart() {

        $items = $this->cart->all();
        return view('cartitems', compact('items') );
//        return $this->cart->all();
    }

    public function addToCart() {
        $room_type = Input::get('room_type');

        $cart = DB::table('hostels')
            ->leftJoin('rooms','hostels.id', '=', 'rooms.hostel_id')
            ->select('hostels.name', 'hostels.id', 'hostels.slug', 'rooms.room_type', 'rooms.price')
            ->where('rooms.room_type', '=', $room_type)
            ->where('rooms.hostel_id', '=', Input::get('hostel_id'))
            ->where('rooms.occupied', '=', 0)->limit(1)->get();

        foreach($cart as $cat){
            $this->data = [
                'sku' => $cat->slug.$cat->room_type,
                'name' => $cat->name,
                'hostel_id' => $cat->id,
                'description' => $cat->room_type,
                'quantity' => Input::get('quantity'),
                'price' => $cat->price
            ];
        }
        $this->cart->insert($this->data);
//        $items = $this->cart->all();
//        return $items;
        return redirect('cart/cartitems');
    }
}
