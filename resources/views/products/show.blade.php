@extends('layouts.temp')

@section('titlePage')
    {{$products->name}}
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">{{$products->name}}</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>{{$products->name}}</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error!!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- {{ asset('storage/'.$products->image) }} --}}
        
{{-- content start --}}
<section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-5 col-md-5 mb-xs-30">
              <style>.fotorama1588874703896 .fotorama__nav--thumbs .fotorama__nav__frame{
padding:2px;
height:77px}
.fotorama1588874703896 .fotorama__thumb-border{
height:73px;
border-width:2px;
margin-top:2px}</style><div class="fotorama--hidden"></div><div class="fotorama fotorama1588874703896" data-nav="thumbs" data-allowfullscreen="native"><div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls" style="width: 750px; min-width: 0px; max-width: 100%;">

<div class="fotorama__stage fotorama__pointer" style="width: 345px; height: 447px;">
  
  <div class="fotorama__fullscreen-icon" tabindex="0" role="button"></div>
  
  <div class="fotorama__stage__shaft" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 345px; margin-left: 0px;"><div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active" style="left: 0px;"><img src="{{ asset('storage/'.$products->image) }}" class="fotorama__img" style="width: 344.907px; height: 447px; left: 0.0462963px; top: 0px;"></div>

<div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img" style="left: 347px;">
<img src="images/2.jpg" class="fotorama__img" style="width: 344.907px; height: 447px; left: 0.0462963px; top: 0px;"></div></div>

<div class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled" tabindex="-1" role="button" disabled="disabled"></div><div class="fotorama__arr fotorama__arr--next" tabindex="0" role="button"></div><div class="fotorama__video-close"></div></div>

<div class="fotorama__nav-wrap"><div class="fotorama__nav fotorama__nav--thumbs fotorama__shadows--right" style="width: 345px;"><div class="fotorama__nav__shaft fotorama__grab" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"><div class="fotorama__thumb-border" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 73px;"></div>

{{$products->images}}

        
        <div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 77px;"><div class="fotorama__thumb"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 77px;"><div class="fotorama__thumb"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 77px;"><div class="fotorama__thumb"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 77px;"><div class="fotorama__thumb"></div></div></div></div></div></div></div>
            </div>
            <div class="col-lg-7 col-md-7">
              <div class="row">
                <div class="col-12">
                  <div class="product-detail-main">
                    <div class="product-item-details">
                      <h1 class="product-item-name">{{$products->name}}</h1>
                      {{-- <div class="rating-summary-block">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div> --}}
                      <div class="price-box"><strong>Price:</strong> &nbsp;&nbsp; <span class="price">&#8358; {{ number_format($products->price, 2, '.', ',') }}</span>  </div>
                      
                      <p><strong>Detail:</strong> {{$products->details}}</p>
                      <br>
                      {{-- <p><strong>Total Price:</strong> <span class="pull-right">
                        <input type="text" name="price" id="price"  class="form-control" disabled value="{{ $products->price }}">  
                      </span></p> --}}
                      <hr>
                      <p>You need a glue gun to build your project. Every kit purchased comes with three (3) pieces of glue sticks</p> <br>
     <strong class="text-danger mb-20">include a glue gun to make your project at a cost of &#8358;1,200</strong>
<hr>
                      <div class="bottom-detail cart-button">
                        <ul class="col-6">
                          <li class="pro-cart-icon">
                            <form action="{{ route('save-cart') }}" method="POST" style="width:200px;">
                                {{csrf_field() }}
                                 
                                
                                  {{-- <div class="check-box"> 
                                    <span>
                                      <input type="checkbox" class="checkbox" id="glue" name="glue">
                                      <label class="label" for="glue">Add Glue</label>
                                    </span>
                                  </div>
                                --}}
                                
                                <input type="hidden" name="id" value="{{ $products->id }}">
                                <input type="hidden" name="name" value="{{ $products->name }}">
                                {{-- <input type="" disabled> --}}
                                <input type="hidden" name="price" id="price" value="{{ $products->price }}">
                                {{-- <input type="hidden" name="newprice" id="newprice"> --}}
                         <hr>
                              <button type="submit" title="Add to Cart" class="btn-color mt-30"><span></span>Add to Cart</button>
                            </form>
                          </li>
                        </ul>
                      </div>

                      {{-- {{$products->description}} --}}
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>


  {{-- description --}}
  <section class="ptb-70">
    <div class="container">
      <div class="product-detail-tab">
        <div class="row">
          <div class="col-lg-12">
            <div id="tabs">
              <ul class="nav nav-tabs">
                <li><a class="tab-Description selected" title="Description">Description</a></li>
              </ul>
            </div>
            <div id="items" class="tab-Description">
              <div class="tab_content">
                <ul>
                  <li>
                    <div class="items-Description selected">
                      <div class="Description"> 
                        <p>{{$products->description}}</p>
                      </div>
                    </div>
                  </li>
              
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- description --}}


  {{-- related poste --}}
  <section class="pb-70">
    <div class="container">
      <div class="product-listing">
        <div class="row">
          <div class="col-12">
            <div class="heading-part mb-40">
              <h2 class="main_title heading"><span>Related Products</span></h2>
            </div>
          </div>
        </div>
        <div class="pro_cat">
          <div class="row">
            <div class="owl-carousel pro-cat-slider owl-loaded owl-drag">
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1500px, 0px, 0px); transition: all 0s ease 0s; width: 5700px;">

            @foreach($suggest as $s)                
            <div class="owl-item cloned" style="width: 300px;"><div class="item">
                <div class="product-item">
                  <div class="main-label sale-label"></div>
                  <div class="product-image"> <a href="product-page.html"> <img src="{{ asset('storage/'.$s->image) }}" alt="Stemlab"> </a>
                    <div class="product-detail-inner">
                      <div class="detail-inner-left align-center">
                        <ul>
                          <li class="pro-cart-icon">
                            <form>
                              <button title="Add to Cart"><span></span>Add to Cart</button>
                            </form>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="{{route('product', $s->slug)}}">{{$s->name}}</a> </div>
                    <div class="price-box"> <span class="price">NGN {{ number_format($s->price, 2, '.', ',') }}</span>  </div>
                  </div>
                </div>
              </div></div>
              
              @endforeach

            </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- related poste --}}



   


@endsection


@section('script')
    <script>
      // $(document).ready(function(){
      //   $("#glue").click(function(){
      //     if(this.checked){
      //       $('#price').val(parseInt($('#price').val()) + 1200)
      //       $('#newprice').val(parseInt($('#price').val()))
      //     }//parseInt()
      //     else{
      //       $('#price').val(parseInt($('#price').val()) - 1200)
      //       $('#newprice').val(parseInt($('#price').val()))
      //     }

          
      //   });
      // });
    </script>
@endsection