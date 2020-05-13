@extends('layouts.temp')

@section('titlePage')
    Login
@endsection
@section('content')


<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Login</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Login</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>


<section class="login_box_area section_gap ptb-70">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="login_box_img">
<img class="img-fluid" src="{{ asset('theme/img/login.jpg') }}" alt="">
<div class="hover">
<h4>New to our website?</h4>
<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
<a class="primary-btn" href="{{ route('register') }}">Create an Account</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="login_form_inner">
<h3>Log in to enter</h3>
<form class="row login_form" action="{{ route('login') }}" method="post">
    @csrf
<div class="col-md-12 form-group">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-md-12 form-group">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-md-12 form-group">
<div class="creat_account">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
<label for="f-option2">Keep me logged in</label>
</div>
</div>
<div class="col-md-12 form-group">
<button type="submit" value="submit" class="primary-btn">Log In</button>
@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
</div>
</form>
</div>
</div>
</div>
</div>
</section>


@endsection
