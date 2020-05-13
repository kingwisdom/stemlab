@extends('layouts.temp')

@section('titlePage')
    Admin Dashboard Page
@endsection 

@section('style')
    <style>
        .dash{width: 263px;height: 280px;background:linear-gradient(90deg,#ffba00 0%,#ff6c00 100%);padding: 50px 20px 20px 20px;}
        .dash p{color: #fff;}

        .dash h1{color: #fff;font-size: 4rem;font-weight: bolder; text-align: center; margin-top: 2rem;}
    </style>
@endsection

@section('content')



<section class="banner-area organic-breadcrumb">
<div class="container">
<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
<div class="col-first">
<h1>Dashboard</h1>
<nav class="d-flex align-items-center">
<a href="index-2.html">Home<span class="lnr lnr-arrow-right"></span></a>
<a href="category.html">Admin Dashboard</a>
</nav>
</div>
</div>
</div>
</section>



<section class="mt-4">

<div class="container">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-5">

@include('includes.admin-sidebar')
</div>
<div class="col-xl-9 col-lg-8 col-md-7">

<div class="filter-bar d-flex flex-wrap align-items-center">
<div class="sorting">
<h3 class="text-center text-white">Quick Access</h3>
</div>

</div>


<section class="lattest-product-area pb-40 category-list">
<div class="row">

<div class="col-lg-4 col-md-6">
    <div class="single-product">
        <div class="dash">
            <p class="h4 text-center">No of Sales</p>
            <h1>200</h1>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-product">
    <div class="dash">
        <p class="h4 text-center">No of Customers</p>
        <h1>200</h1>
    </div>
</div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-product">
        <div class="dash">
            <p class="h4 text-center">Goods</p>
            <h1>200</h1>
        </div>
    </div>
</div>
</div>


</div>

</div>
</section>



</div>
</div>
</section>


<section class="brand-area section_gap">
<div class="container">
    <div class="row">
        <a class="col single-img" href="#">
        <img class="img-fluid d-block mx-auto" src="{{ asset('theme/img/brand/1.png') }}" alt="">
        </a>
        <a class="col single-img" href="#">
        <img class="img-fluid d-block mx-auto" src="{{ asset('theme/img/brand/2.png') }}" alt="">
        </a>
        <a class="col single-img" href="#">
        <img class="img-fluid d-block mx-auto" src="{{ asset('theme/img/brand/3.png') }}" alt="">
        </a>
        <a class="col single-img" href="#">
        <img class="img-fluid d-block mx-auto" src="{{ asset('theme/img/brand/4.png') }}" alt="">
        </a>
        <a class="col single-img" href="#">
        <img class="img-fluid d-block mx-auto" src="{{ asset('theme/img/brand/5.png') }}" alt="">
        </a>
    </div>
</div>
</section>

{{-- sponsoores --}}
<section class="brand-area">
    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
            <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
            </a>
            <a class="col single-img" href="#">
            <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
            </a>
            <a class="col single-img" href="#">
            <img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
            </a>
            <a class="col single-img" href="#">
            <img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
            </a>
            <a class="col single-img" href="#">
            <img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
            </a>
        </div>
    </div>
</section>



@endsection 