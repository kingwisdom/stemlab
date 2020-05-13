@extends('layouts.temp')

@section('titlePage')
    All Products
@endsection
 

@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">All Products</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>All Products</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

{{-- contents --}}

<section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3 mb-sm-30 col-lgmd-20per">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Categories</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                @foreach ($categories as $cat)
                  <li><a href="{{route('allProducts', ['cat'=>$cat->id])}}">{{ $cat->name }}</a></li>
                @endforeach
                </ul>
              </div>
            </div>
            
            
           
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-lgmd-80per"> 
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="view">
                  <div class="list-types grid active "> <a href="#">
                    <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                  <div class="list-types list"> <a href="#">
                    <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
               
              </div>
              <div class="col-lg-6">
                
              </div>
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product', $product->slug)}}"> <img src="{{ asset('storage/'.$product->image) }}" alt="stemlab"  style="width: 376px; height:290px;" > </a>
                      
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product', $product->slug)}}">{{$product->name }}</a> </div>
                      <div class="price-box"> <span class="price">NGN {{ number_format($product->price, 2, '.', ',') }}</span>  </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
                
               
                
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pagination-bar">
                    {{ $products->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- contents --}}

<!-- newsletter session -->
<section>
    <div class="newsletter">
      <div class="container">
        <div class="newsletter-inner center-sm">
          <div class="row">
            <div class=" col-xl-10 col-md-12 push-xl-1">
              <div class="newsletter-bg">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="newsletter-title">
                      <h2 class="main_title">Subscribe to our newsletter</h2>
                      <div class="sub-title">Sign up to our newsletter</div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <form action="{{route('mailling')}}" method="POST">
                      @csrf
                      <div class="newsletter-box">
                        <input type="email" name="email" placeholder="Email Here...">
                        <button type="submit" class="btn-color">Subscribe</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- newsletter session -->

@endsection
