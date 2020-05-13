@extends('layouts.temp')

@section('titlePage')
    Create Products
@endsection 


@section('content')

<section class="banner-area organic-breadcrumb">
<div class="container">
<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
<div class="col-first">
<h1>Products</h1>
<nav class="d-flex align-items-center">
<a href="index-2.html">Home<span class="lnr lnr-arrow-right"></span></a>
<a href="category.html">Create Product</a>
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

@include('includes.message')
<form class="row contact_form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="col-md-6">

<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Enter Product Name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="details" placeholder="Enter Short Description">
</div>
<div class="form-group">
<input type="file" class="form-control" name="image">
</div>
<div class="form-group">
<input type="number" class="form-control" name="price" placeholder="Enter Price">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<textarea class="form-control" name="description"></textarea>
</div>
</div>
<div class="col-md-12 text-right">
<button type="submit" value="submit" class="primary-btn">Post Product</button>
</div>
</form>


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