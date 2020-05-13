@extends('layouts.temp')

@section('titlePage')
    Payment
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Payment</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><span>Payment</span></li>
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


        <section class="checkout-section ptb-70">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="checkout-step mb-40">
                  
                  <ul>
                    <li> 
                      <a href="#">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">1</div>
                        </div>
                        <span>Shipping</span> 
                      </a> 
                    </li>
                    <li> 
                      <a href="{{route('overview')}}">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">2</div>
                        </div>
                        <span>Order Overview</span> 
                      </a> 
                    </li>
                    <li class="active"> 
                      <a href="{{route('payment')}}">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">3</div>
                        </div>
                        <span>Payment</span> 
                      </a> 
                    </li>
                    <li> 
                      <a href="{{route('complete')}}">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">4</div>
                        </div>
                        <span>Order Complete</span> 
                      </a> 
                    </li>
                    <li>
                      <div class="step">
                        <div class="line"></div>
                      </div>
                    </li>
                  </ul>
                  <hr>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-8 ">
                      <div class="payment-option-box mb-30">
                        <div class="payment-option-box-inner gray-bg">
                          <div class="payment-top-box">
                            <div class="radio-box left-side"> <span>
                              <input type="radio" id="paypal" value="paypal" name="payment_type">
                              </span>
                              <label for="paypal">PayStack</label>
                            </div>
                            <div class="paypal-box">
                              <div class="paypal-img"> <img src="{{asset('themes/images/payment-method.png')}}" alt="Stemlab"> </div>
                            </div>
                          </div>
                          <p>Use your credit card or bank debit card</p>
                          <p>Payment can be submitted in any currency.</p>
                        </div>
                      </div>
                      
                      <form action="{{ route('pay') }}" method="POST">
                        <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="345">
                
                        <input type="hidden" name="amount" value="
                        @if(session()->has('glue'))
                        {{ (Cart::total(null,null,'') + session()->get('glue')['amount'] + session()->get('ship')['shipPrice']) * 100 }}
            @else
            {{(Cart::total(null,null,'') + session()->get('ship')['shipPrice']) * 100}}
            @endif
                        "> {{-- required in kobo --}}
                
                        {{-- <input type="hidden" name="quantity" value="3"> --}}
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value']) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                
                
                        <p>
                          <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                          </button>
                        </p>
                
                </form>
                
                    </div>
                  </div>



              </div>
            </div>
          </div>
        </section>
        
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


@section('script')
    <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
 <script>
</script>
@endsection


