<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Stemlab | @yield('titlePage') </title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="robots" content="ALL">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/font-awesome.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/fotorama.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/magnific-popup.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/css/responsive.css') }}">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>
<body class="homepage">
<div class="se-pre-con"></div>

<div class="main">
 
  <!-- HEADER START -->
  <header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="top-link top-link-left select-dropdown">
              <fieldset>
                <select name="speed" class="countr option-drop">
                  <option selected="selected">English</option>
                  
                </select>
                <select name="speed" class="currenc option-drop">
                  <option selected="selected">NGN</option>
                  
                </select>
              </fieldset>
            </div>
          </div>
          <div class="col-6">
            <div class="top-right-link right-side">
              <ul>
                
                @guest
                
                <a href="{{route('login')}}" title="Login"><i class="fa fa-user"></i> Login</a>
                <a href="{{route('register')}}" title="Register"><i class="fa fa-user-plus"></i> Register</a>
                @else
               
                
                  <a href="{{route('logout')}}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> 
                    
                    Logout
                  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </a>
                
                @endguest
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-xl-3 col-md-3 col-lgmd-20per">
            <div class="header-middle-left">
              <div class="navbar-header float-none-sm">
                <a class="navbar-brand page-scroll" href="/">
                  <img alt="Stylexpo" src="{{asset('themes/images/logo.png')}}">
                </a> 
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-lgmd-60per">
            <div class="header-right-part">
              
              <div class="main-search">
                <div class="header_search_toggle desktop-view">
                  <form action="{{route('search') }}" method="get">
                    @csrf
                    <div class="search-box">
                      <input class="input-text" type="text" name="result" value="{{request()->input('result')}}" placeholder="Search entire store here...">
                      <button type="submit" class="search-btn"></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-lgmd-20per">
            <div class="right-side float-left-xs header-right-link">
              <ul>
                <li class="compare-icon">
                  <a href="#">
                    <span></span>
                  </a>
                </li>
                <li class="wishlist-icon">
                  <a href="#">
                    <span></span>
                  </a>
                </li>

                {{-- <a href="{{ route('cart') }}" class="cart"><span class="fa fa-shopping-cart" style="font-size:16px;"></span>
                  @if(Cart::instance('default')->count() > 0)
                      <span class="ml-1">{{ Cart::instance('default')->count()}}</span>
                  @endif --}}


                <li class="cart-icon"> <a href="#"> <span> <small class="cart-notification">
                  @if(Cart::instance('default')->count() > 0)
                    {{ Cart::instance('default')->count()}}
                  @endif
                  </small> </span> </a>
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      @foreach(Cart::content() as $item)
                      <li> 
                        <div class="media">
                          <div class="media-body"> <span><a href="#">{{ $item->model->name}}</a></span>
                            <p class="cart-price">>&#8358; {{ $item->model->price}}</p>
                            
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">{{Cart::subtotal()}}</strong></span> </p>
                    <div class="clearfix"></div>
                    <div class="mt-20"> <a href="{{route('cart')}}" class="btn-color btn">Cart</a></div>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom"> 
      <div class="container">
        <div class="row position-r">
          <div class="col-xl-2 col-lg-3 col-lgmd-20per position-s">
            <div class="sidebar-menu-dropdown home">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories </a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse" >
                    <div class="top-right-link mobile right-side">
                      <ul>
                        <li class="login-icon content">
                          <a class="content-link">
                          <span class="content-icon"></span> 
                          </a> 


                          <div class="content-dropdown">
                            <ul>
                              @guest
                              <li class="login-icon"><a href="{{route('login')}}" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="{{route('register')}}" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                              @else
                             
                              <li class="login-icon">
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> 
                                  
                                  Logout
                                
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></a>
                              </li>
                              @endguest
                            </ul>


                          </div>
                        </li>
                   
                      </ul>
                    </div>
                    
                    <div class="header-top mobile">
                      <div class="">
                        <div class="row">
                          <div class="col-12">
                            <div class="top-link top-link-left select-dropdown ">
                              <fieldset>
                                <select name="speed" class="country option-drop">
                                  <option selected="selected">English</option>
                                 
                                </select>
                                <select name="speed" class="currency option-drop">
                                  <option selected="selected">NGN</option>
                                  
                                </select>
                              </fieldset>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="top-link right-side">
                              <div class="help-num" >Need Help? : 0816 462 9665</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-lgmd-60per">
            <div class="bottom-inner">
              <div class="position-r">          
                <div class="nav_sec position-r">
                  <div class="mobilemenu-title mobilemenu">
                    <span>Menu</span>
                    <i class="fa fa-bars pull-right"></i>
                  </div>
                  <div class="mobilemenu-content">
                    <ul class="nav navbar-nav" id="menu-main">
                      <li class="">
                        <a href="/"><span>Home</span></a>
                      </li>
                      
                      <li>
                        <a href="{{route('about')}}"><span>About Us</span></a>
                      </li>
                      
                      <li>
                        <a href="{{route('all_blogs')}}"><span>Blog</span></a>
                      </li>

                      <li>
                        <a href="{{route('allProducts')}}"><span>Products</span></a>
                      </li>
                      
                      <li>
                        <a href="{{route('contact')}}"><span>Contact</span></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-lgmd-20per">
            <div class="right-side float-left-xs header-right-link">
            <div class="right-side">
              <div class="help-num" >Need Help? : 0816 462 9665</div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup-links ">
      <div class="popup-links-inner">
        <ul>
          <li class="categories">
            <a class="popup-with-form" href="#categories_popup"><span class="icon"></span><span class="icon-text">Categories</span></a>
          </li>
          <li class="cart-icon">
            <a class="popup-with-form" href="#cart_popup"><span class="icon"></span><span class="icon-text">Cart</span></a>
          </li>
          <li class="account">
            <a class="popup-with-form" href="#account_popup"><span class="icon"></span><span class="icon-text">Account</span></a>
          </li>
          <li class="search">
            <a class="popup-with-form" href="#search_popup"><span class="icon"></span><span class="icon-text">Search</span></a>
          </li>
          <li class="scroll scrollup">
            <a href="#"><span class="icon"></span><span class="icon-text">Scroll-top</span></a>
          </li>
        </ul>
      </div>
      
      
    </div>
  </header>
  <!-- HEADER END -->  
  
  
  <!-- CONTAIN START -->
@yield('content')

    
  <!-- FOOTER START -->
  <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row">
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <div class="f-logo"> 
                  <a href="/" class=""> 
                    <img src="{{asset('themes/images/footer-logo.png')}}" alt="stemlab"> 
                  </a> 
                </div>
                <div class="footer-block-contant">
                  <p>
                    STEMLAB is Africa’s pioneer and number one home and community STEM education provider.
                </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Help <span></span></h3>
                <ul class="footer-block-contant link">
                 
                  <li><a href="#"> Shipping</a></li>
                  <li><a href="#">Return & Exchange </a></li>
                  <li><a href="#">International</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Guidance <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="#"> Delivery information</a></li>
                  <li><a href="#"> Privacy Policy</a></li>
                   <li><a href="#"> Terms & Conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">address<span></span></h3>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p>Office: 8a Habitat Close, Off Admiralty Way, <br>Lekki Phase One, Lagos Nigeria</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope"> </i>
                    <p> <a href="#">complaint@stemlab.com </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom ">
          <div class="row mtb-30">
            <div class="col-lg-6 ">
              <div class="copy-right ">© 2020 Stemlab | All Rights Reserved.</div>
            </div>
            <div class="col-lg-6 ">
              <div class="footer_social pt-xs-15 center-sm">
                <ul class="social-icon">
                  <li><div class="title">Follow us on :</div></li>
                  <li><a title="Facebook" href="https://facebook.com/stemlabafrica" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" href="https://twitter.com/stemlabafrica" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" href="https://instagram.com/stemlabafrica" class="linkedin"><i class="fa fa-instagram"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-center mtb-30 ">
            <div class="col-12 ">
              <div class="site-link">
                <ul>
                  <li><a href="{{route('contact')}}">About Us</a></li>
                  <li><a href="{{route('contact')}}">Contact Us</a></li>
                  <li><a href="{{route('returnPolicy')}}">Return Policy </a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div class="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
</div>
<script src="{{asset('themes/js/jquery-1.12.3.min.js') }}"></script> 
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="{{asset('themes/js/bootstrap.min.js') }}"></script>  
<script src="{{asset('themes/js/jquery.downCount.js') }}"></script>
<script src="{{asset('themes/js/jquery-ui.min.js') }}"></script> 
<script src="{{asset('themes/js/fotorama.js') }}"></script>
<script src="highlight.html"></script>
<script src="app.html"></script>
<script src="{{asset('themes/js/jquery.magnific-popup.js') }}"></script> 
<script src="{{asset('themes/js/owl.carousel.min.js') }}"></script>  
<script src="{{asset('themes/js/custom.js') }}"></script>

  <script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
      player = new YT.Player('player', {
        playerVars: { 'rel': 0, 'autoplay': 1, 'controls': 0,'autohide':1,'showinfo': 0, 'wmode':'opaque' },
        videoId: 'Lgitw016T44',
        //suggestedQuality: 'hd720',
        events: {
          'onReady': onPlayerReady}
      });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.mute();
      event.target.setPlaybackQuality('hd720');
      //$(".video").fitVids();
      
      $('.video i').on('click',function() {
        if ($('.video').hasClass('on')) {
          event.target.mute();
          $('.video').removeClass('on');
        } else {
          event.target.unMute();
          $('.video').addClass('on');
        }
      });
      
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.BUFFERING) {
            event.target.setPlaybackQuality('hd720');
        }
    }

    
    </script>
<script>
  // /* ------------ Newslater-popup JS Start ------------- */
  // $(window).load(function() {
  //   $.magnificPopup.open({
  //     items: {src: '#newslater-popup'},type: 'inline'}, 0);
  // });
    /* ------------ Newslater-popup JS End ------------- */
</script>

@yield('script')


</body>

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx001/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:32:04 GMT -->
</html>
