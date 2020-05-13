@extends('layouts.temp')

@section('titlePage')
    Checkout
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><span>Checkout</span></li>
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
                    <li class="active"> 
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
                    <li> 
                      <a href="{{route('payment')}}">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">3</div>
                        </div>
                        <span>Payment</span> 
                      </a> 
                    </li>
                    <li> 
                      <a href="">
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
                <div class="checkout-content">
                  <div class="row">
                    <div class="col-12">
                      <div class="heading-part align-center">
                        <h2 class="heading">Please fill up your Shipping details</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                      
                      <form class="row contact_form" action="{{ route('shipping') }}" method="POST" id="payment-form">
                        @csrf
                        
                        <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="first" name="name" placeholder="Full name">
                        </div>
                        
                        <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="number" name="email" value="{{ auth()->user()->email}}" readonly>
                        </div>
                        <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="number" name="phone" placeholder="Phone number">
                        </div>
                    
                    
                        <div class="col-md-12 form-group p_star">
                        <input type="text" class="form-control" id="address" name="address" placeholder="e.g 25 Adetokunbo Ademola Street with popular bustop
                        ">
                        </div>
                    
                        <div class="col-md-12 form-group p_star">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Your City">
                        </div>
                    
                        <div class="col-md-6">
                            <div class="input-box select-dropdown">
                              <fieldset>
                                <select name="state" class="option-drop" id="shippingstateid" style="display: none;">
                                  <option value="">Select a State</option>
                                  @foreach($shipfees as $shipfee)
                                  <option value="{{$shipfee->state}}">{{$shipfee->state}}</option>
                                  @endforeach
                                </select>
                              </fieldset>
                            </div>
                          </div>
                    
                    
                        <div class="col-md-6">
                            <div class="input-box select-dropdown">
                              <fieldset>
                                <select name="hearAboutUs" class="option-drop" id="shippingstateid" style="display: none;">
                                  <option value="">Select a How You Us</option>
                                  <option value="Friend or Colleague">Friend or Colleague</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Your child’s school">Your child’s school</option>
                                        <option value="Others">Others</option>
                                </select>
                              </fieldset>
                            </div>
                          </div>
                    
                          <div class="col-md-12"> 
                            <button type="submit" class="btn btn-color right-side">Next</button> 
                          </div>
                    </form>
                    
                    </div>
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
                    <div class="sub-title">Sign up for newsletter</div>
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


