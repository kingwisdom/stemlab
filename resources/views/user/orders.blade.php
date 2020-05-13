@extends('layouts.temp')

@section('titlePage')
    Account
@endsection


@section('content')

<section class="banner-area organic-breadcrumb">
<div class="container">
<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
<div class="col-first">
<h1>Account</h1>
<nav class="d-flex align-items-center">
<a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
<a href="/all-products">My Orders</a>
</nav>
</div>
</div>
</div>
</section>

@if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

<section class="section_gap">

    <div class="container">
    <div class="row">
    <div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
    <div class="head">Menu</div>
    <ul class="main-categories">

    <li class="main-nav-list child"><a href="{{route('users.edit')}}">My Profile</a></li>
    <li class="main-nav-list child"><a href="{{route('order.view')}}">My Orders</a></li>




    </ul>
    </li>
    </ul>
    </div>



    </div>

    <div class="col-xl-9 col-lg-8 col-md-7">

    <section class="lattest-product-area pb-40 category-list">
    <h3>My Orders</h3>
    </section>

    <div class="row">
        @foreach($orders as $order)
            <div class="col-md-4">
                <div class="card card-body">
                    <div>{{$order->id}}</div>
                    <div>{{$order->billing_total}}</div>


                    @foreach($order->products as $p)
                        <div>{{$p->name}}</div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </section>




@endsection
