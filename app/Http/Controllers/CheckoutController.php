<?php

namespace App\Http\Controllers;

use App\Shipping;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipfees = Shipping::orderBy('state', 'asc')->get();
        
        return view('products.checkout', compact('shipfees'));
    }

    public function addGlue(Request $request){
        // $newprice = $request->price + 1200;
        // $subtotal = Cart::total(null,null,'');
        session()->put('glue', [
            'gluePrice' => 1,200,
            'amount' => 1200,
        ]);
        // Cart::update($request->id, [
        //    'price' => $request->price + session()->get('glue')['amount']
        // ]);
        
        
        return redirect()->route('cart')->with('messagge', 'Glue gun added successfully');
    }

    public function removeGlue(Request $request){
        
        
        // if(session()->get('glue')['amount']){
        //     (Cart::subtotal() - 1200);
        // }
        session()->forget('glue');
        return redirect()->route('cart')->with('messagge', 'Glue gun remove successfully');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $charge = Stripe::charges()->create([
                'amount'=> Cart::total() / 100,
                'currency' => 'NGN',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [

                ],
            ]);

            
            return back()->with('message', 'Thank You, Your Payment Has Been Recieved!');
        }
        catch(Exception $ex){
            return $ex;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
