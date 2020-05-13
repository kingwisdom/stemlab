@extends('layouts.temp')

@section('titlePage')
    Register
@endsection
@section('content')


<div class="banner inner-banner1">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Register</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Register</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>


<section class="login_box_area section_gap ptb-70">
<div class="container">
<div class="row">

<div class="col-lg-6">
<div class="login_form_inner">
<h3>Register Enter</h3>
<form class="row login_form" action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" hidden name="name" value="">
<div class="col-md-12 form-group">
<input id="email" type="email" placeholder="Your Email Address"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-md-12 form-group">
<input id="password" type="password" placeholder="Your Password Here" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-md-12 form-group">
<input id="password-confirm" type="password" placeholder="Confirm Your Password" class="form-control" name="password_confirmation" required autocomplete="new-password">


</div>
<div class="col-md-12 form-group">

</div>
<div class="col-md-12 form-group">
<button type="submit" value="submit" class="primary-btn">Register</button>

</div>
</form>
</div>
</div>

<div class="col-lg-6">
<div class="login_box_img">
<img class="img-fluid" src="{{ asset('theme/img/login.jpg') }}" alt="">
<div class="hover">
<h4>Already Has An Account</h4>
<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
<a class="primary-btn" href="{{ route('login') }}">Login Here</a>
</div>
</div>
</div>


</div>
</div>
</section>


@endsection

