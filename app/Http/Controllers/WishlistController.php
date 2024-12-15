<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use App\Models\Product;


class WishlistController extends Controller
{
    public function index()
    {
        $items = Cart::instance('wishlist')->content();
        return view('wishlist', compact('items'));
    }
    
    public function add_to_wishlist(Request $request)
    {
        Cart::instance('wishlist')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Models\Product');

        return redirect()->back();  
    }

    public function remove_item($rowId)
    {
        Cart::instance('whislist')->remove($rowId);
        return redirect()->back(); 
    }

    public function empty_whislist()
    {
        Cart::instan('whislist')->destroy();
        return redirect()->back(); 
    }
}