@extends('layouts.temp')

@section('titlePage')
    View Products
@endsection 


@section('content')

<section class="banner-area organic-breadcrumb">
<div class="container">
<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
<div class="col-first">
<h1>Products</h1>
<nav class="d-flex align-items-center">
<a href="index-2.html">Home<span class="lnr lnr-arrow-right"></span></a>
<a href="category.html">All Product</a>
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
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Image</th>
<th scope="col">Title</th>
<th scope="col">Price</th>
<th scope="col">Date</th>
<th scope="col">Action</th>
</tr>
</thead>

@foreach ($products as $item)

<tbody>
<tr>
<td>
<img src="{{asset('product_images/'.$item->image)}}" alt="" style="height:100px;"></td>
<td>{{$item->name}}</td>
<td>
<h5>&#8358; {{ $item->price }}</h5>
</td>

<td>{{ $item->created_at->diffForHumans() }}</td>
<td>
    <a href=""><i class="fa fa-pencil"></i></a>
</td>
</tr>

</tbody>
    
@endforeach

</table>
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