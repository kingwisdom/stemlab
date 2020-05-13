@extends('layouts.temp')

@section('titlePage')
    Blogs
@endsection
 

@section('content')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Blogs</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="/">Home</a>/</li>
            <li><span>Blogs</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 col-lg-9 col-lgmd-80per">
          <div class="blog-listing">
            <div class="row">

            @foreach($blogs as $blog)
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src="{{ asset('storage/'.$blog->image) }}" alt="Stemlab" style="width: 450px; height:320px;">
                    <div class="blog-effect"></div> 
                    <a href="{{route('blog', $blog->slug)}}" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">{{$blog->created_at->diffForHumans()}}</span>
                    <h3><a href="{{route('blog', $blog->slug)}}">{{$blog->title}}</a></h3>
                    <p>{{substr($blog->body,0,40) . '...'}}</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> Stemlab</a></li>
                        {{-- <li><a href="#">(5) comments</a></li> --}}
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="row">
              <div class="col-12">
                <div class="pagination-bar">
                  {{-- <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  @endsection