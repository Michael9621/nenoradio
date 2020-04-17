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
              <li class="nav-item"><a href="{{ route('shows') }}" class="nav-link">shows</a></li>
              <li class="nav-item active"><a href="{{ route('presenters') }}" class="nav-link">presenters</a></li>
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
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">TV presenters</h1>    
          </div>
          
        </div>
      </div>
    </div>

    <div class="cards-list">
    @if($presenters->count() > 0)
        @foreach($presenters as $presenter)
        <div class="card 1">
           <div class="card_image"> <img src="{{asset($presenter->featured_image)}}" />
                <p class="text-center"> <b> {{ $presenter->name }} </b> </p>
            </div>
            
        </div>
        @endforeach
    @else
    <div class="sermons-content-area sermons-p sermons-margin">
        <div class="container">
            <div class="c0l-12">
                <div class="sermons-text text-center">    
                    <p class="text-center p-5"> no presenters at the moment </p>
                </div>
            </div>   
        </div>
        
    </div>
    @endif


    </div>


@endsection