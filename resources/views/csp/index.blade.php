@extends('layouts.temp')

@section('titlePage')
    Return Policy
@endsection


@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Community Stem Program</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><span>Community Stem Program</span></li>
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

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error!!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
{{-- section about --}}
<section class="sample-text-area ptb-70">
    <div class="container">
    <h2 class="text-heading">Community Stem Program</h2>
    <p class="sample-text">
        Register your child(ren) for our community based, weekend STEM program to continuously explore STEM projects. We have several STEMLAB hubs that are close to you in a bid to provide convenience and ease of access for learners.
    </p>
    <p>
        Over time, we have mentored learners on different projects ranging from coding, robotics, hydraulic excavator, remote control lift door, smart garbage can, automated water dispenser, fire alarm, salt water car, vacuum cleaner, automated fan, robots and so on
    </p>
    <h3>PRICING</h3>
    
    <p>Are you a first-time learner? Yes or No? <br>   if yes, a registration fee of &#8358;10,000 is required which provides learners with <strong>safety goggle, workbook, overall, shirt, customized bag and glue gun to aid learning</strong> </p>

    <div class="brand-logo">
        <div class="container">
          <div class="row">
            <div class="col-12 ">
              <div class="heading-part mb-30">
                <h3 class="main_title heading"><span>Our Pricing</span></h3>
              </div>
            </div>
          </div>
          <div class="row brand">
            <div class="col-md-12">
              <div id="brand-logo" class="owl-carousel align_center owl-loaded owl-drag">
                
                
                
                
                
                
                
                
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1060px, 0px, 0px); transition: all 0s ease 0s; width: 4240px;"><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand5.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand6.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand7.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand8.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item active" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand1.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item active" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand2.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item active" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand3.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item active" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand4.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand5.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand6.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand7.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand8.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand1.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand2.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand3.png') }}" alt="Stylexpo"></a></div></div><div class="owl-item cloned" style="width: 265px;"><div class="item"><a href="#"><img src="{{asset('themes/images/brand4.png') }}" alt="Stylexpo"></a></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="heading-part mb-30">
        <h2 class="main_title heading"><span>Standard Pricing</span></h2>
      </div>
    
    <hr>

    <section class="pt-70"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sub-banner small-banner small-banner1">
                <a href="#">
                  <img src="{{asset('themes/images/small-1.jpg')}}" alt="Stemlab">
                </a>
              </div>
            </div>
            <div class="col-lg-4 mt-sm-30">
              <div class="sub-banner small-banner small-banner2">
                <a href="#">
                  <img src="{{asset('themes/images/small-2.jpg')}}" alt="Stemlab">
                </a>
              </div>
            </div>
            <div class="col-lg-4 mt-sm-30">
              <div class="sub-banner small-banner small-banner3">
                <a href="#">
                  <img src="{{asset('themes/images/small-3.jpg')}}" alt="Stemlab">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <h4>MONTHLY PACKAGE</h4>
    
    <h3 class="mt-3 text-center">QUARTERLY PACKAGE (3 MONTHS)</h3>
    
        <h4 class="text-center">All Saturdays in 3 months, register and enjoy an instant 15% discount</h4>
    

    <hr>

    <div class="row justify-content-center mt-30">
        <div class="col-xl-6 col-lg-8 col-md-8">
            <form action="{{('csp')}}" method="POST" class="main-form full">
                @csrf
              <div class="row mb-20">
                <div class="col-12 mb-20">
                  <div class="heading-part">
                    <h3 class="sub-heading">Register Here</h3>
                  </div>
                  <hr>
                </div>
                <div class="col-md-6 mb-30">
                  <div class="input-box">
                    <input type="text" required="" name="guardian_name" placeholder="Guardian Name">
                  </div>
                </div>
                <div class="col-md-6 mb-30">
                  <div class="input-box">
                    <input type="email" name="email" required="" placeholder="Email Address">
                  </div>
                </div>
                <div class="col-md-6 mb-30">
                  <div class="input-box">
                    <input type="text" required=""  name="phone" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6 mb-30">
                  <div class="input-box">
                    <input type="text" required="" name="child_name" placeholder="Child's Name">
                  </div>
                </div>
                
                <div class="col-md-6 mb-30">
                  <div class="input-box">
                    <input type="text" required="" name="age" placeholder="Child's Age">
                  </div>
                </div>

                <div class="col-md-6 mb-30">
                    <div class="input-box select-dropdown">
                      <fieldset>
                        <select name="learning_period" class="option-drop" id="shippingcountryid" style="display: none;">
                          <option selected="" value="">Learning Period</option>
                          <option value="Morning (9:30 am – 1:00 pm)">Morning (9:30 am – 1:00 pm)</option>
                        <option value="Afternoon (1:00 pm – 4:30 pm)">Afternoon (1:00 pm – 4:30 pm)</option>

                        </select>
                      </fieldset>
                    </div>
                </div>


                <div class="col-md-12 mb-30">
                  <div class="input-box">
                    <input type="text" required="" name="address" placeholder="Address">
                  </div>
                </div>

                <div class="col-md-12 mb-30">
                  <div class="input-box">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </div>
                </div>
                
                
                
              </div>
              
            </form>
          </div>


        
    </div>
    </div>
    </section>

@endsection
