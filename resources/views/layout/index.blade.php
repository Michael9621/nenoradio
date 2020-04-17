<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Mwangaza radio </title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li><a href="{{route('welcome')}}">Home</a></li>
							@if($categories->count() > 0)
								@foreach($categories as $category)
									<li><a href="{{ route('single_category', ['slug' => $category->slug ]) }}">{{$category->name}}</a></li>
								@endforeach
							@else
									<li><a class="text-center">no categories</a></li>
							@endif
						</ul>
					</nav>
					

					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form  >
								<input class="input" type="text" name="search" placeholder="Search posts">
							</form>
						</div>
					</div>

					<div class="button-nav">
						<a class="" href="https://mwangazatv.co.ke/" style="color:#fff;"><i class="fa fa-tv"></i> tv</a>
						<button class=""href="https://mwangazawanenofm.co.ke/" style="color:#fff;"><i class="fa fa-tv"></i> radio</button>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->

         @yield('content')
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">	
						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">Recent posts</h2>
								</div>
								@if($posts->count() > 0)
									@foreach($posts as $post)
									<!-- ARTICLE -->
									<article class="article widget-article">
										<div class="article-img">
											<a href="{{route('single_post', ['slug' => $post->slug ])}}">
												<img src="{{ $post->featured_image}}" alt="">
											</a>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="{{route('single_post', ['slug' => $post->slug ])}}">{{ $post->title }}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString() }}</li>
											</ul>
										</div>
									</article>
									<!-- /ARTICLE -->
									@endforeach
								@else
									<p> no posts yet </p>
								@endif
							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->

						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">recent continued </h2>
								</div>
								@if($posts_two->count() > 0)
									@foreach($posts_two as $post)
									<!-- ARTICLE -->
									<article class="article widget-article">
										<div class="article-img">
											<a href="{{route('single_post', ['slug' => $post->slug ])}}">
												<img src="{{ $post->featured_image}}" alt="">
											</a>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="{{route('single_post', ['slug' => $post->slug ])}}">{{ $post->title }}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString()}}</li>
											</ul>
										</div>
									</article>
									<!-- /ARTICLE -->
									@endforeach
								@else
									<p>no posts yet</p>
								@endif
							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->

						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<h2 class="title"><a href="{{route('welcome')}}" class="logo">Mwangaza T.V/a></h2>
									<p>Mwangaza Tv is a TV station that exist to spread the word God to alll</p>
								</div>
							</div>
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Follow Us</h3>
								</div>
								<ul>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->
							
							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Address</h2>
								</div>
								<p>Jewel Complex 6th Floor</p>
								<p>email</p>
								<p>phone</p>
							</div>
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer copyright -->
						<div class="col-md-12">
							<div class="footer-copyright text-center">
								<span><b>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mwangaza Wa Neno F.M</a></b></span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				var url = window.location;
				$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
				$('ul.nav a').filter(function() {
					return this.href == url;
				}).parent().addClass('active');
			});
		</script>
		
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcb15f9f9f3757f"></script> 
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcb15f9f9f3757f"></script>
	</body>
</html>
