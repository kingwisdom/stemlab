@extends('layouts.temp')

@section('titlePage')
    Home Page
@endsection

@section('content')

{{-- newsletter popup --}}
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="newsletter-inner">
        <span>Sign up for latest information</span>
        <h2 class="main_title">Subscribe Emails</h2>
        <form action="{{route('mailling')}}" method="POST">
          @csrf
          <input type="email" name="email" placeholder="Email Here...">
          <button class="btn-black" type="submit">Subscribe</button>
        </form>
        <p></p>
      </div>
    </div>
  </div>
</div>


<!-- BANNER STRAT -->
<section class="">
    <div id="owl-example" class="banner owl-carousel">
      <div class="main-banner">
        <div class="item">
          <div class="banner-1"> <img src="{{asset('themes/images/banner1.jpg')}}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-4"></div>
                  <div class="col-lg-7 col-8">
                    <div class="banner-detail-inner"> 
                      {{-- <span class="slogan">UP TO 25% OFF</span> --}}
                      <h1 class="banner-title">CONDUCTIVITY TESTER</h1>
                      <span class="offer">Conductors are materials that allow electricity pass through them.</span>
                    </div>
                    {{-- <a class="btn btn-color" href="shop.html">Shop Now!</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="banner-2"> <img src="{{asset('themes/images/banner2.jpg')}}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-8 col-8">
                    <div class="banner-detail-inner"> 
                      <span class="slogan">new look</span>
                      <h1 class="banner-title">MODEL CRANE</span></h1>
                      <span class="offer">Machines help to do work easier and faster. </span> 
                    </div> 
                      {{-- <a class="btn btn-color" href="#">Shop Now!</a> --}}
                  </div>
                  <div class="col-lg-3 col-4"></div>              
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="banner-3"> <img src="{{asset('themes/images/banner3.jpg')}}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-4"></div>
                  <div class="col-lg-7 col-md-7 col-8">
                    <div class="banner-detail-inner"> 
                      {{-- <span class="slogan"></span> --}}
                      <h1 class="banner-title">TABLE LAMP</h1>
                      <span class="offer">This project seeks to educate learners on the concept of circuit and electricity.</span> 
                    </div>
                      {{-- <a class="btn btn-color" href="#">Shop Now!</a> --}}
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BANNER END --> 
  
<!-- Products section -->

<section class="ptb-70">
    <div class="container">
      <div class="row">
        
        <div class="col-xl-12 col-lg-12"> 
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="view">
                  <div class="list-types grid active "> <a href="{{route('allProducts')}}">
                    <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                  <div class="list-types list"> <a href="{{route('allProducts')}}">
                    <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
               
              </div>
            
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">

              @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-12 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product', $product->slug)}}"> <img src="{{ asset('storage/'.$product->image) }}" style="width: 376px; height:290px;" alt="Stemlab"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            
                            <li class="pro-compare-icon"><a href="{{route('product', $product->slug)}}" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product', $product->slug)}}">{{ $product->name }}</a> </div>
                      <div class="price-box"> <span class="price">&#8358; {{ number_format($product->price, 2, '.', ',') }}</span>  </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Products section -->


<!-- top category section -->

{{-- <section class=" pt-70">
      <div class="top-cate-bg ptb-70">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="heading-part mb-30">
                <h2 class="main_title heading"><span>Top Categories</span></h2>
              </div>
            </div>
          </div>
          <div class="pro_cat">
            <div class="row">
              <div id="top-cat-pro" class="owl-carousel sell-pro align-center owl-loaded owl-drag">
                
            
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0s ease 0s; width: 4800px;"><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_5.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>sunglasses</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_6.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>kid's wear</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_7.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women t-shirt</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_2.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item active" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_1.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women tops</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item active" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_2.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item active" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_3.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>watches</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item active" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_4.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>shoes</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_5.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>sunglasses</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_6.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>kid's wear</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_7.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women t-shirt</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_2.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_1.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women tops</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_2.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_3.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>watches</span>
                      </div>
                    </div>
                  </a>
                </div></div><div class="owl-item cloned" style="width: 300px;"><div class="item ">
                  <a href="shop.html">
                    <div class="item-inner">
                        <img src="images/cate_4.jpg" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>shoes</span>
                      </div>
                    </div>
                  </a>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
<!-- top category section -->

<!-- get community -->

<section>
      <div class="perellex-banner">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 offset-xl-2 ptb-70 client-box">
              <div class="perellex-delail align-center">
                <div class="perellex-offer"><span class="line-bottom">STEM PROGRAM COMMUNITY PROGRAMME</span></div>
                {{-- <div class="perellex-title ">New computer models are releasing </div>  --}}
                <p>Register your child / children for our community based, weekend STEM program to continuously explore STEM projects. We have several STEMLAB hubs that are close to you in a bid to provide convenience and ease of access for learners.</p>         
                <a class="btn btn-color" href="{{route('csp')}}">STEM PROGRAM COMMUNITY </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     
<!-- get community -->

<!-- services -->
<div class="ser-feature-block">
      <div class="container">
        <div class="center-xs">
          <div class="row">
            <div class="col-xl-4 col-md-6 service-box">
              <div class="feature-box ">
                <div class="feature-icon feature1"></div>
                <div class="feature-detail">
                  <div class="ser-title">Delivery</div>
                  <div class="ser-subtitle">Delivery throughout the country</div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 service-box">
              <div class="feature-box">
                <div class="feature-icon feature2"></div>
                <div class="feature-detail">
                  <div class="ser-title">Support 24/7</div>
                  <div class="ser-subtitle">Online 24 hours</div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 col-md-6 service-box">
              <div class="feature-box ">
                <div class="feature-icon feature4"></div>
                <div class="feature-detail">
                  <div class="ser-title">Big Saving</div>
                  <div class="ser-subtitle">Weeken Sales</div>
                </div>
              </div>
            </div>
          </div>        </div>
      </div>
    </div>
<!-- services -->

<!-- related posts -->

<section class="ptb-70">
  <div class="container">
    <div class="product-listing">
      
          <div class="row">
            <div class="col-12">
              <div class="heading-part mb-30">
                <h2 class="main_title heading"><span>New Products</span></h2>
              </div>
            </div>
          </div>

          <div class="pro_cat">
            <div class="row">
             
              @foreach ($newDeal as $p)
              <div class="col-lg-3 col-md-6 col-sm-12"><div class="item">
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product', $p->slug)}}"> <img src="{{ asset('storage/'.$p->image) }}" style="width: 376px; height:200px;" alt="Stemlab"> </a>
                      
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product', $p->slug)}}">{{$p->name}}</a> </div>
                      <div class="price-box"> <span class="price">&#8358; {{ number_format($p->price, 2, '.', ',') }}</span> </div>
                    </div>
                  </div>
                </div></div>
                @endforeach

                <div class="owl-dots disabled"></div>
            </div>
          </div>

        
    </div>
  </div>
</section>
      
<!-- related posts -->

<!-- blog session -->
        

<!--Blog Block Start -->
<section class="pb-70">
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <div class="heading-part mb-30">
          <h2 class="main_title heading"><span>Latest News</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
     
        @foreach ($blogs as $b)
        <div class="item mb-md-30 col-md-4 col-sm-12">

          <div class="blog-item">
            <div class="">
            <div class="blog-media"> 
              <img src="{{ asset('storage/'.$b->image) }}" alt="Stemlab" style="width: 370px; height:283px;">
              <div class="blog-effect"></div> 
              <a href="{{route('blog', $b->slug)}}" title="Click For Read More" class="read">&nbsp;</a> 
            </div>
            </div>
            <div class="mt-30">
              <div class="blog-detail"> 
                <div class="blog-title"><a href="{{route('blog', $b->slug)}}">{{$b->title}}</a></div>
                <div class="post-info">
                  <p>{{substr($b->body,0,40) . '...'}} </p>
                  <ul>
                    {{-- <li>
                      <a href="#">0 comment(s)</a>
                    </li> --}}
                    <li>
                      <a href="{{route('blog', $b->slug)}}">Read more 
                        <i class="fa fa-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
@endforeach

        
      
    </div>
  </div>
</section>
<!--Blog Block End -->


<!-- blog session -->


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
                      <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
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













