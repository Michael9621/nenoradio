<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mwangaza Tv</title>
    <link rel="icon" href="{{ asset('asset/images/tvlogo.jpg') }}" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
   
    
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  </head>
  <body>

    <!--START NAV-->
    @yield('nav_content')
    <!-- END nav -->
    
    @yield('content')

    <footer class="ftco-footer ftco-section" style="margin-top:60px;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mwangaza wa Neno Media.</h2>
              <p>Mwanganza wa Neno is a media group that exists soely to spread the word of God to all</p>

            </div>
          </div>
         
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('home') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ route('shows') }}" class="py-2 d-block">Shows</a></li>
                <li><a href="https://mwangazawanenofm.co.ke/" class="py-2 d-block">Radio</a></li>

               
            </div>
          </div>
           <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('presenters') }}" class="py-2 d-block">presenters</a></li>
                <li><a href="https://mwangazawaneno.co.ke/contactus" class="py-2 d-block">talk to us</a></li>
                <li><a href="https://mwangazawaneno.co.ke/" class="py-2 d-block">Mwanganza Corporate</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Reach us</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jewel Complex, opposite TRM 6th Floor</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">not available</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@mwangazamedia.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <!--<div class="ftco-footer-widget">
            <ul class="ftco-footer-social list-unstyled text-center mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
            </ul>
          </div>-->

        <div class="row">
          <div class="col-md-6">

            <p class="p-4">
              <a href="#" ></a> All rights reserved &copy; <script>document.write(new Date().getFullYear());</script>  
             </p>
          </div>
          <div class="col-md-6">
            <div class="ftco-footer-widget">
            <p><ul class="ftco-footer-social list-unstyled text-center">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
            </ul></p>
          </div>
          </div>
        </div>

      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('asset/js/popper.min.js') }}"></script>
  <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('asset/js/aos.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('asset/js/scrollax.min.js') }}"></script>
 
  <script src="{{ asset('asset/js/main.js') }}"></script>

  <script>
      $(document).ready(function(){
            var height = 0;
            $('.head-h h3').each(function(){
            var currentHeight= $(this).height();
                height = currentHeight > height ? currentHeight : height; 
            });
            $('.head-h h3').css('height', height); 
        });

        $('.owl-carousel').owlCarousel({
            margin:10,
            loop:true,
            autoWidth:true,
            items:2
        });



  </script>
    
  </body>
</html>