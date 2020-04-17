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
              <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">home</a></li>
              <li class="nav-item active"><a href=" {{ route('shows') }}" class="nav-link">shows</a></li>
              <li class="nav-item"><a href="{{ route('presenters') }}" class="nav-link">presenters</a></li>
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
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">shows<h1>    
          </div>
          
        </div>
      </div>
    </div>



    @if($shows->count() > 0)
        
        <div class="cards-list">
            @foreach($shows as $show)
                <div class="card 1">
                    <div class="card_image"> <img src="{{ $show->featured_image }}" /> 
                        <p class="text-center"><a href=""> {{ $show->name }} </a> </p>
                    </div>
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

    <div class="team-members-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Clergy</h2>
                        <p>A brief overview of what you can expect at our worship experiences.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url(img/bg-img/33.jpg);">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Jackson Nash</h6>
                        <span>Pastor</span>
                    </div>
                </div>

                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url(img/bg-img/34.jpg);">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Rucsandra Moisa</h6>
                        <span>Bishop</span>
                    </div>
                </div>

                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url(img/bg-img/35.jpg);">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Ollie Schneider</h6>
                        <span>Archbishop</span>
                    </div>
                </div>

                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url(img/bg-img/36.jpg);">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Alex Manning</h6>
                        <span>Pope</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection