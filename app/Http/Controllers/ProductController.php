<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function allProducts(){
        if(request()->cat){
            $products = Product::with('categories')->where('category_id', request()->cat)->paginate(12);
            $categories = Category::all();
        }
        else{
            $products = Product::inRandomOrder()->take(12)->paginate(12);
            $categories = Category::all();
        }


        return view('products.allProducts')->with([
            'products' => $products,
            'categories' => $categories
            ]);
    }

    public function show($slug){
        $products = Product::where('slug',$slug)->firstOrFail();
        $suggest = Product::where('slug','!=', $slug)->inRandomOrder()->take(3)->get();

        return view('products.show')->with([
            'products'=> $products,
            'suggest' => $suggest,
        ]);
    }

    

    public function search(Request $request){
        $request->validate([
            'result' => 'required|min:3',
        ]);
         $result = $request->input('result');
        // $products = Product::where('name', 'like', "%$result%")->get();
        $categories = Category::all();
       // $prods = Product::with('categories')->where('category_id', )->get();

       $products = Product::where('name', 'like', "%$result%")
                            ->orWhere('details', 'like', "%$result%")
                            ->paginate(10);
      // $products = Product::search($result)->paginate(12);


        return view('search-results')->with([
            'products'=> $products,
            'categories' => $categories,
        ]);
    }
}
