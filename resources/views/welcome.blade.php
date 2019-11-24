@extends('layout.index')

	@section('content')
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
		
		</div>
		<!-- /Owl Carousel 1 -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">{{ $first_category->name }}</h2>
								</div>
							</div>
							<!-- /section title -->
							@foreach($first_category->posts->sortKeysDesc()->take(2) as $post)
								<!-- Column 1 -->
								<div class="col-md-6 col-sm-6">
									<!-- ARTICLE -->
									<article class="article">
										<div class="article-img">
											<a href="#">
												<img src="{{$post->featured_image}}" alt="{{$post->featured_image}}">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h3 class="article-title"><a href="{{ route('single_post', ['slug' => $post->slug])}}">{{ $post->title }}</a></h3>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString()}}</li>
												<li><i class="fa fa-comments"></i> 33</li>
											</ul>
											<p>{{ str_limit($post->content, 40,'...')}}</p>
										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
								<!-- /Column 1 -->
							@endforeach
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
						@foreach($first_category->posts->sortKeysDesc()->slice(2)->take(3) as $post)
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{ $post->featured_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">{{ $post->title}}</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
						@endforeach
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">	
						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title">Stay Connected</h2>
							</div>
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
	
							</ul>
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
						<div class="widget">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMwangazawanenofm%2F&tabs=timeline&width=340&height=1000&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
						<!-- /subscribe widget -->
						
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		<div class="container section">
			<!-- row -->
			<div class="row">
				<!-- Column 1 -->
				<div class="col-md-6 col-sm-6">
					@if($second_category->posts->count() > 0)
					<!-- section title -->
					<div class="section-title">
						<h2 class="title">{{ $second_category->name }}</h2>
					</div>
					<!-- /section title -->
					@foreach($second_category->posts->sortKeysDesc()->take(1) as $post)
					<!-- ARTICLE -->
					<article class="article">
						<div class="article-img">
							<a href="#">
								<img src="{{ $post->featured_image }}" alt="{{ $post->featured_image }}">
							</a>
							<ul class="article-info">
								<li class="article-type"><i class="fa fa-camera"></i></li>
							</ul>
						</div>
						<div class="article-body">
							<h3 class="article-title"><a href="#">{{ $post->title }}</a></h3>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString()}}</li>
								<li><i class="fa fa-comments"></i> 33</li>
							</ul>
							<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
						</div>
					</article>
					<!-- /ARTICLE -->
					@endforeach
					
					@foreach($second_category->posts->sortKeysDesc()->slice(1)->take(2) as $post)
					<!-- ARTICLE -->
					<article class="article widget-article">
						<div class="article-img">
							<a href="#">
								<img src="{{ $post->featured_image }}" alt="">
							</a>
						</div>
						<div class="article-body">
							<h4 class="article-title"><a href="#">{{$post->title}}</a></h4>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString()}}</li>
								<li><i class="fa fa-comments"></i> 33</li>
							</ul>
						</div>
					</article>
					<!-- /ARTICLE -->
					@endforeach
					@endif
				</div>
				<!-- /Column 1 -->
				
				<!-- Column 2 -->
				<div class="col-md-6 col-sm-6">
				@if($third_category->posts->count() > 0)
					<!-- section title -->
					<div class="section-title">
						<h2 class="title">{{ $third_category->name }}</h2>
					</div>
					<!-- /section title -->
					@foreach($third_category->posts->sortKeysDesc()->take(1) as $post)
					<!-- ARTICLE -->
					<article class="article">
						<div class="article-img">
							<a href="#">
								<img src="{{ $post->featured_image}}" alt="">
							</a>
							<ul class="article-info">
								<li class="article-type"><i class="fa fa-file-text"></i></li>
							</ul>
						</div>
						<div class="article-body">
							<h3 class="article-title"><a href="#">{{ $post->title }}</a></h3>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString()}}</li>
								<li><i class="fa fa-comments"></i> 33</li>
							</ul>
							<p>sdhghdgsjhd</p>
						</div>
					</article>
					<!-- /ARTICLE -->
					@endforeach
				
					@foreach($third_category->posts->sortKeysDesc()->slice(1)->take(2) as $post)
					<!-- ARTICLE -->
					<article class="article widget-article">
						<div class="article-img">
							<a href="#">
								<img src="./img/img-widget-9.jpg" alt="">
							</a>
						</div>
						<div class="article-body">
							<h4 class="article-title"><a href="#">{{ $post->title }}</a></h4>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o">{{ $post->created_at->toFormattedDateString()}}</i></li>
								<li><i class="fa fa-comments"></i> 33</li>
							</ul>
						</div>
					</article>
					<!-- /ARTICLE -->
					@endforeach
				@endif
				</div>
				<!-- /Column 2 -->
			</div>
			<!-- /row -->	
		</div>	
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">{{ $fourth_category->name }}</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							@foreach($fourth_category->posts->sortKeysDesc()->take(4) as $post)
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{ $post->featured_image }}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">{{ $post->category->name }}</a></li>
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">{{ $post->title }}</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							@endforeach
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
	@endsection