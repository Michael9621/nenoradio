@extends('layout.main')

@section('nav_content')

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href=""> <img style="height:60px; width:100px;" src="{{asset ('asset/images/tvlogo.jpg') }}"> </span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">home</a></li>
              <li class="nav-item"><a href="{{ route('shows') }}" class="nav-link">shows</a></li>
              <li class="nav-item"><a href=" {{ route('presenters') }}" class="nav-link">presenters</a></li>
              <li class="nav-item"><a href="https://mwangazawaneno.co.ke/contactus" class="nav-link">contact us</a></li>
            </ul>
          </div>
        </div>
  </nav>


@endsection


@section('content')

  
<div class="hero-wrap screens" style="background-image: url('asset/images/studio.jpg');" data-stellar-background-ratio="0.5"> 
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text  justify-content-end" data-scrollax-parent="true">
          <div class="col-md-11 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-align:center; !important">Mwangaza TV<h1>    
          </div>
          
        </div>
      </div>
    </div>

    <div class=" heading-section text-center ftco-animate">
      <h2 class="mb-4">Featured shows</h2>
    </div>

    @if($shows->count() > 0)
      <div class="cards-list">
        @foreach($shows as $show)
        <div class="card 1">
          <a class="card_image" href="#"> <img src="{{ $show->featured_image }}" /> </a>
          <p class="text-center"> {{ $show->name }} </p>
        </div>
        @endforeach
      </div>
    @else
      <div class="sermons-content-area sermons-p sermons-margin">
        <div class="container">
            <div class="c0l-12">
                <div class="sermons-text text-center">    
                    <p class="text-center p-5"> no shows at the moment </p>
                </div>
            </div>   
        </div>   
      </div>
    @endif
    @if($posts->count() > 0)
  <section class="ftco-section ftco-degree-bg">
      <div class=" heading-section text-center ftco-animate">
        <h2 class="mb-4">News</h2>
      </div>
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 ftco-animate">
            
                <div class="row">
                
                 
                    @foreach($posts as $post)
                    <div class="col-md-4 d-flex ftco-animate">
                      <diV class=" card card-t">
                          <div class="blog-entry align-self-stretch d-md-flex item">
                              <a href="blog-single.html" class="block-20" style="background-image: url('{{ $post->featured_image}}');">
                              </a>
                              <div class="text d-block pl-md-4 head-h">
                                  <div class="meta mb-3">
                                      <div><a href="#">{{ $post->created_at }}</a></div>
                                  </div>
                                  <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                              </div>
                          </div>
                      </div>
                    </div>
                    @endforeach
                    <div class="row mt-5 text-center">
                      <div class="col">
                        <div class="block-27">
                                <p><a href="blog-single.html" class="btn btn-primary py-4 px-5">Read more</a></p>
                        </div>
                      </div>
                    </div>
                 
                

                </div>
            </div>
          </div>

            



            </div> <!-- .col-md-8 -->
        </div>
      </div>
  </section> <!-- .section -->
  @endif

  
  <div class="sermons-content-area sermons-p sermons-margin">
        <div class="container">
            <div class="c0l-12">
                <div class=" heading-section text-center ftco-animate">
                  <h2 class="mb-4">About us</h2>
                </div>
                    
                    <div class="sermons-text text-center">
                       
                        <p class="text-center p-5"> nothing to show at moment </p>
                    

                    </div>
            </div>   
        </div>
        
    </div>



   




@endsection