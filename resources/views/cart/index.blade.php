@extends('layouts.temp')

@section('titlePage')
    Cart
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Cart</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Cart</span></li>
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

<section class="cart_area ptb-70">
    <div class="container-fluid">
    <div class="cart_inner">
        @if(Cart::count() > 0)
    <div class="text-center">
        <h2>{{ Cart::count() }} item(s) in the Shopping Cart </h2>
    </div>
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Action</th>
    <th>Total</th>
    </tr>
    </thead>
    <tbody>
@foreach(Cart::content() as $item)
        <tr>
            <td>
                <div class="media">
                <div class="d-flex">
                <img src="{{ asset('storage/'.$item->model->image) }}" class="img-responsive" style="height: 100px;" alt="">
                </div>
                <div class="media-body">
                <p><a href="{{route('product',$item->model->slug)}}">{{ $item->model->name}}</a></p>
                </div>
                </div>
            </td>
            <td>
                <h5>&#8358; {{ $item->model->price}}</h5>
            </td>
            <td>
                <div class="product_count">

                    <input type="text" hidden value="{{$item->rowId}}" id="quantity">
                    <input type="text" hidden value="{{ $item->model->quantity }}" id="productQuantity">
                    <input type="number" value="{{$item->qty}}" name="quantity" id="sst" maxlength="12">
                    
                </div>
            </td>
            <td>
                {{-- <a>Save For Later</a> --}}
                <form method="POST" action="{{ route('saveForLater', $item->rowId) }}">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-default">Save For Later</button>
                </form>

                <form method="POST" action="{{ route('destroy', $item->rowId) }}">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>

            </td>
            <td>
            <h5> &#8358; {{$item->model->price}}</h5>
            </td>
        </tr>
@endforeach

    <tr>
        <td>
        </td>
        <td>
        </td>
       
        <td>
        </td>
        <td>
        <h5>Total</h5>
        </td>
        <td>
        <h5> &#8358; @if(session()->has('glue'))
            {{ number_format(Cart::total(null,null,'') + session()->get('glue')['amount'], 2, '.', ',') }}
  
            @else
            {{ number_format(Cart::total(null,null,'') , 2, '.', ',')}}
            @endif
        </h5>
        </td>
    </tr>
    
    <tr class="out_button_area">
    <td>
    </td>
    <td>
    </td>
    <td>
    </td>
    <td>
    <div class="checkout_btn_inner d-flex align-items-center">
        @if(!session()->has('glue'))
    <a class="btn btn-primary" href="{{ route('addGlue') }}" onclick="event.preventDefault();
                  document.getElementById('add-form').submit();"> 
                    Add Glue
                    
                    <form id="add-form" action="{{ route('addGlue') }}" method="POST" style="display: none;">
                      @csrf
                      <input type="text" hidden name="price" value="{{$item->model->price}}">
                      <input type="text" hidden name="id" value="{{$item->rowId}}">
                    </form>
                  </a>
@else
                  
    <a class="btn btn-danger" href="{{ route('removeGlue') }}" onclick="event.preventDefault();
                  document.getElementById('remove-form').submit();"> 
                    Remove Glue
                    
                    <form id="remove-form" action="{{ route('removeGlue') }}" method="POST" style="display: none;">
                      @csrf
                      {{method_field('delete')}}
                    </form>
                  </a>
@endif
    <a class="btn btn-info" style="margin: 0 30px;" href="{{ route('allProducts') }}">Continue Shopping</a>
    <a class="btn btn-success" href="{{ route('checkout.index') }}">Proceed to checkout</a>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    @else
        <h2 class="text-center">No Item Yet</h2>
    @endif
    </div>


    {{-- @if(session()->get('glue') != null)
        {{session()->get('glue')['amount']}} 
    @endif --}}


    <div class="container" style="margin-top:30px;">
    <div class="cart_inner">
        @if(Cart::instance('saveForLater')->count() > 0)
    <div class="text-center">
        <h2>{{ Cart::instance('saveForLater')->count() }} item(s) in the Save for later </h2>
    </div>
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th scope="col">Product</th>
    <th scope="col">Price</th>
    <th scope="col">Action</th>
    <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>
@foreach(Cart::instance('saveForLater')->content() as $item)
        <tr>
            <td>
                <div class="media">
                <div class="d-flex">
                <img src="img/cart.jpg" alt="">
                </div>
                <div class="media-body">
                <p><a href="{{route('product',$item->model->slug)}}">{{ $item->model->name}}</a></p>
                </div>
                </div>
            </td>
            <td>
                <h5>&#8358; {{ number_format($item->model->price, 2, '.', ',') }}</h5>
            </td>

            <td>
                {{-- <a>Save For Later</a> --}}
                <form method="POST" action="{{ route('switchToCart', $item->rowId) }}">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-default">Move To Cart</button>
                </form>

                <form method="POST" action="{{ route('sfl.destroy', $item->rowId) }}">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>

            </td>
            <td>
                <h5> &#8358; {{$item->model->price}}</h5>
            </td>
        </tr>
@endforeach

    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        <h5>Total</h5>
        </td>
        <td>
        <h5> &#8358; {{Cart::total(null,null,'')}}</h5>
        </td>
    </tr>




    </tbody>
    </table>
    </div>
    @else
        <h2 class="text-center">No Item Yet</h2>
    @endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>
        (function(){

            const classname = document.querySelectorAll('.quantity')
            const idValue = document.getElementById('quantity').value;
            const productQuantity = document.getElementById('productQuantity').value;
            const qty = document.getElementById('sst');
            //const btn = document.getElementById('btn');

            qty.addEventListener('keyup', function(e){
                console.log(e.target.value)
                //const id = element.getAttribute('data-id')
                    //const ids = document.getElementById('');
                    // const productQuantity = element.getAttribute('data-productQuantity')
                    if(e.target.value == 0 || e.target.value == isNaN){
                        return;
                    }

                        axios.patch(`/cart/update/${idValue}`, {
                            quantity: e.target.value,
                            productQuantity: productQuantity
                        })
                        .then(function (response) {
                            console.log(response);
                            window.location.href = '{{ route('cart') }}'
                        })
                        .catch(function (error) {
                            console.log(error);
                            window.location.href = '{{ route('cart') }}'
                        });


            })

            Array.from(classname).forEach(function(element) {
                console.log(element);

                element.addEventListener('change', function() {
                    alert(123)
                    const id = element.getAttribute('data-id')
                    //const ids = document.getElementById('');
                    const productQuantity = element.getAttribute('data-productQuantity')
                    console.log(idValue)

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                         console.log(response);
                        window.location.href = '{{ route('cart') }}'
                    })
                    .catch(function (error) {
                         console.log(error);
                        window.location.href = '{{ route('cart') }}'
                    });
                })
            });
       })();

    </script>
@endsection
