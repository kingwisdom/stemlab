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
<a href="/all-products">Account</a>
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
    <h3>My Profile</h3>
    </section>

    <div class="review_box">

        <form class="row contact_form" action="{{ route('users.update') }}" method="post">
            @method('patch')
            @csrf


        <div class="col-md-12 form-group">
            <input id="name" type="text" placeholder="Your Full Name"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <div class="col-md-12 form-group">
            <input id="email" type="email" placeholder="Your Email Address"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12 form-group">
            <input id="password" type="password" placeholder="Your Password Here" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12 form-group">
            <input id="password-confirm" type="password" placeholder="Confirm Your Password" class="form-control" name="password_confirmation"  autocomplete="new-password">


            </div>
            <div class="col-md-12 form-group">

            </div>
            <div class="col-md-12 form-group">
            <button type="submit" class="primary-btn">Update Account</button>

            </div>

        </form>
        </div>
    </div>
    </div>
    </section>




@endsection
