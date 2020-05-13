@extends('layouts.temp')

@section('titlePage')
    About us
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">About us</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>About us</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

{{-- section about --}}
<section class="sample-text-area ptb-70">
    <div class="container">
    <h3 class="text-heading">About Us</h3>
    <p class="sample-text">
        <strong>STEMLAB</strong> is Africa’s pioneer and number one home and community STEM education provider.
        We provide a learning platform for kids within the age range of 5-17 years to explore different fields of STEM through experiments, hands-on projects, coding and robotics in homes and communities across Africa
        With this initiative, the innovative and inventive acumen in young minds are groomed at a much early age and sustained through adulthood thereby preparing them for the jobs of the future.
        The STEM LAB programs immerse learners under the mentorship of qualified STEM experts in different fields of STEM. We are committed to bringing STEM education to every home and community across the continent of Africa

    </p>
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
                      <div class="sub-title">Sign up for newsletter</div>
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
