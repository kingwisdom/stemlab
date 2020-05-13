<?php

namespace App\Http\Controllers;

use App\Product;
use App\Mailing;
use App\Contact;
use App\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at','desc')->take(3)->get();
       $products = Product::inRandomOrder()->take(8)->get();
       $newDeal = Product::all()->take(3);
        return view('index')->with(['products'=> $products, 'newDeal'=>$newDeal, 'blogs'=>$blogs]);
    }

   

    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function returnPolicy()
    {
        return view('returnPolicy');
    }

    public function postcontact(Request $req){
        //email, subject, message
        $req->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);
        return redirect(route('main'));

    }

    public function mailling(Request $req){
        $req->validate([
            'email' => 'required|email'
        ]);

      Mailing::create([
            'email' => $req->email,
        ]);
        return redirect(route('main'));

    }
}
