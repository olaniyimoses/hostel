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
        return view('cartitems')
            ->with('items', $this->cart->all())
            ->with('total', $this->cart->total());
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
            $this->cart->insert([
                'sku' => $cat->slug.$cat->room_type,
                'name' => $cat->name,
                'hostel_id' => $cat->id,
                'description' => $cat->room_type,
                'price' => $cat->price,
                'quantity' => Input::get('quantity'),
                'subtotal' => $cat->price * Input::get('quantity'),
            ]);
        }

//        return $this->cart->all();

        return redirect('cart/cartitems');
    }
}
