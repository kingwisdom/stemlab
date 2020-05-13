<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class SaveForLaterController extends Controller
{
    public function switchToCart($id){

        $item = Cart::instance('saveForLater')->get($id);
        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart')->with('message', 'Item is already in your cart');
        }

        Cart::instance('default')->add($item->id, $item->name, 1,$item->price)->associate('App\Product');

        return redirect()->route('cart')->with('message', 'Item has been moved to cart successfully');
    }

    public function destroy($id){
        Cart::instance('saveForLater')->remove($id);
        return  back()->with('message', 'Item has been removed');
    }
}
