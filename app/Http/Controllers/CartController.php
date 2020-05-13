<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//use bumbummen99\shoppingcart\src\Facades\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    //
    public function index(){
        return view('cart.index');
    }
 
    public function store(Request $request){
        // dd($request->all());
        $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart')->with('message', 'Item is already in your cart');
        }
        
        Cart::add($request->id, $request->name, 1,$request->price)->associate('App\Product');

        return redirect()->route('cart')->with('message', 'Item was added to the cart');
    }

    public function saveForLater($id){
        $item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');

        return redirect()->route('cart')->with('message', 'Item has been saved for later');
    }

    public function update($id, Request $request){

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,10'
        ]);

        // if ($validator->fails()) {
        //     session()->flash('errors', collect(['Quantity must be between 1 and 10.']));
        //     return response()->json(['success' => false], 400);
        // }

        // if ($request->quantity > $request->productQuantity) {
        //     session()->flash('errors', collect(['We currently do not have enough items in stock.']));
        //     return response()->json(['success' => false], 400);
        // }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }
    public function destroy($id){
        Cart::remove($id);
        return  back()->with('message', 'Item has been removed');
    }
}
