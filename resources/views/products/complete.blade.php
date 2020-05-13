@extends('layouts.temp')

@section('titlePage')
    Complete Order
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Completed</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><span>Completed</span></li>
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
                    <li class="active"> 
                      <a href="#">
                        <div class="step">
                          <div class="line"></div>
                          <div class="circle">2</div>
                        </div>
                        <span>Order Overview</span> 
                      </a> 
                    </li>
                    <li> 
                      <a href="">
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
                        <h2 class="heading">Order Overview</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-sm-30">
                      <div id="form-print" class="admission-form-wrapper">
                        <div class="cart-item-table complete-order-table commun-table mb-30">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Product</th>
                                  <th>Product Detail</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach(Cart::content() as $item)
                                <tr>
                                  <td>
                                    <a href="#">
                                      <div class="product-image">
                                        <img alt="Stemlab" src="{{ asset('storage/'.$item->model->image) }}">
                                      </div>
                                    </a>
                                  </td>
                                  <td>
                                    <div class="product-title"> 
                                      <a href="#">{{$item->model->name}}</a>
                                      <div class="product-info-stock-sku m-0">
                                        <div>
                                          <label>Price: </label>
                                          <div class="price-box"> 
                                            <span class="info-deta price">{{ number_format($item->model->price, 2, '.', ',') }}</span> 
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="complete-order-detail commun-table mb-30">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>Glun gun</td>
                                  <td><div class="price-box"> <span class="price">
                                    @if(session()->get('glue') != null)
                                    {{session()->get('glue')['amount']}} 
                                    @else
                                    -
                                @endif </span> </div></td>
                                </tr>
                                <tr>
                                  <td>Shipping</td>
                                  <td><div class="price-box"> <span class="price">{{session()->get('ship')['shipPrice']}}</span> </div></td>
                                </tr>
                                <tr>
                                  <td><b>Total :</b></td>
                                  <td><div class="price-box"> <span class="price">&#8358; @if(session()->has('glue'))
                                    {{ number_format((Cart::total(null,null,'') + session()->get('glue')['amount'] + session()->get('ship')['shipPrice']), 2, '.', ',') }}
                                    @else
                                    {{ number_format( (Cart::total(null,null,'') + session()->get('ship')['shipPrice']), 2, '.', ',') }}
                                    @endif</span> </div></td>
                                </tr>
                                <tr>
                                  <td><b>Payment :</b></td>
                                  <td>Paystack</td>
                                </tr>
                                <tr>
                                  <td><b></b></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="mb-30">
                          <div class="heading-part">
                            <h3 class="sub-heading">Order Confirmation</h3>
                          </div>
                          <hr>
                          <p class="mt-20">Your order has been placed and you will be contacted shortly</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="print-btn">
                            <button onclick="printDiv('form-print')" class="btn btn-color" type="button">Print</button>
                            <div class="right-side float-none-xs mt-sm-30"> 
                              <a class="btn btn-black" href="{{route("allProducts")}}">
                                <span><i class="fa fa-angle-left"></i></span>Continue Shopping
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="cart-total-table address-box commun-table">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <ul>
                                    <li class="inner-heading"> <b>Thanks for Patronising us</b> </li>
                                    
                                  </ul>
                                </td>
                              </tr>
                            </tbody>
                          </table>
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


@section('script')
    <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
 <script>
</script>
@endsection


