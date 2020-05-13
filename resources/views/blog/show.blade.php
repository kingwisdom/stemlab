@extends('layouts.temp')

@section('titlePage')
    {{$blogs->title}}
@endsection


@section('content')

  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">{{$blogs->title}}</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><a href="/blogs">Blog</a>/</li>
            <li><span>{{$blogs->title}}</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-12 mb-60">
              <div class="blog-media mb-30"> 
                <img src="{{ asset('storage/'.$blogs->image) }}" alt="Stemlab"> 
              </div>
              <div class="blog-detail ">
                <div class="post-info">
                  <ul>
                    <li><span class="post-date">{{$blogs->created_at}}</span></li>
                    <li><span>By</span><a href="#"> Stemlab</a></li>
                  </ul>
                </div>
                <h3>{{$blogs->title}}</h3>
                <p>{{$blogs->body}}.</p>
                <hr>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-3">
          <div class="sidebar-block">
            <div class="sidebar-box mb-40">
              <form>
                <div class="search-box">
                  <input type="text" placeholder="Search entire store here..." class="input-text">
                  <button class="search-btn"></button>
                </div>
              </form>
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
                      <div class="sub-title">Sign up for newsletter </div>
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