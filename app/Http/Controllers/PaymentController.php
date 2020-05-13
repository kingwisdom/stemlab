<?php

namespace App\Http\Controllers;

use App\Mail\Orderplaced;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Unicodeveloper\Paystack\Facades\Paystack;
use App\Order;
use App\Shipping;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    public function shipping(Request $request){
        //dd($request->all());
        $shippingFee = 0;
        if($request->state){
            $ships = Shipping::where('state', $request->state)->first();
            $shippingFee = $ships->amount;

            session()->put('ship', [
                'shipPrice' => $shippingFee,
               // 'amount' => Cart::total() + 1200,
            ]);
        }

        $shippingFee;
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_state' => $request->state,
            'billing_phone' => $request->phone,
            'hearAboutUs' => $request->hearAboutUs,
            'shiping_fee' => $shippingFee,
            'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
            'billing_total' => $this->getNumbers()->get('newTotal'),
            
        ]);
        
        //insert into order_product table
        foreach(Cart::content() as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        //send mail to customer
       // Mail::send(new Orderplaced($order));
        return view('products.overview');
    }

    public function overview(){
        return view('products.overview');
    }

    public function payment(){
        return view('products.payment');
    }
    public function complete(){
        // foreach(Cart::content() as $item){
        //         $id = $item->model->id;
         
        // }
        // Order::where('product_id', $id);
       // Cart::instance('default')->destroy();
        return view('products.complete');
    }

    public function redirectToGateway()
    {
        //dd($request->all());
       
          try{
            Cart::content()->map(function($item){
                return $item->model->name. " ".$item->model->slug." ".$item->qty;
             })->values()->toJson();

        // dd($paymentDetails);

         


            return Paystack::getAuthorizationUrl()->redirectNow();

            // Now you have the payment details,
            // you can store the authorization_code in your db to allow for recurrent subscriptions
            // you can then redirect or do whatever you want
            return redirect(route('complete'));
          }
         catch(Exception $ex){
             return $ex;
             return view('errorpage');
         }


    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        try{
            $paymentDetails = Paystack::getPaymentData();
            //dd($paymentDetails);
            return redirect(route('complete'));
        }
        catch(Exception $ex){
            return $ex;
            return view('errorpage');
        }


    }

    public function thankyou(){
        return view('thankyou');
    }

    private function getNumbers(){
        $newSubtotal = Cart::subtotal();
       // $newTax = $tax;
        $newTotal = $newSubtotal;

        return collect([
            
            'newSubtotal' => $newSubtotal,
           // 'newTax'=>$newTax,
            'newTotal' => $newTotal
        ]);
    }


    // 'billing_name_on_card' => null,
    //          'billing_discount' =>$this->getNumbers()->get('discount'),
    //          'billing_discount_code' => $this->getNumbers()->get('code'),
    //          'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
    //          'billing_tax' => $this->getNumbers()->get('newTax'),
    //          'billing_total' => $this->getNumbers()->get('newTotal'),
    //          'error' => null,
}
