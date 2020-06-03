@extends('layout.index')

	@section('content')
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			@if($header_posts->count()> 0)
				@foreach($header_posts as $header_post)
				<!-- ARTICLE -->
				<article class="article thumb-article">
					<div class="article-img">
						<img src="{{asset($header_post->featured_image)}}" alt="{{$header_post->featured_image}}">
					</div>
					<div class="article-body">
						<ul class="article-info">
							<li class="article-category"><a href="#">{{ $header_post->category->name }}</a></li>
							<li class="article-type"><i class="fa fa-camera"></i></li>
						</ul>
						<h2 class="article-title"><a href="{{ route('single_post', ['slug' => $header_post->slug])}}">{{ $header_post->title }}</a></h2>
						<ul class="article-meta">
							<li><i class="fa fa-clock-o"></i>{{ $header_post->created_at->toFormattedDateString()}}</li>
							<li><i class="fa fa-comments"></i> 33</li>
						</ul>
					</div>
				</article>
				<!-- /ARTICLE -->
				@endforeach
			@endif
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
									<h2 class="title">{{ $first_category  ? $first_category->name : "no category yet" }}</h2>
								</div>
							</div>
							<!-- /section title -->
							@if($first_category)
								@if($first_category->posts)
									@foreach($first_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->take(2) as $post)
										<!-- Column 1 -->
										<div class="col-md-6 col-sm-6">
											<!-- ARTICLE -->
											<article class="article">
												<div class="article-img">
													<a href="#">
														<img src="{{asset($post->featured_image)}}" alt="{{$post->featured_image}}">
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
								@else
									<div class="col-md-6">
										<p class="text-center"> no posts yet </p>
									</div>
								@endif
							@else
								<div class="col-md-6">
									<p class="text-center"> no posts yet </p>
								</div>	
							@endif
						</div>
						<!-- /row -->
						
						
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
					@if($second_category)
						@if($second_category->posts)
							<!-- section title -->
							<div class="section-title">
								<h2 class="title">{{ $second_category->name }}</h2>
							</div>
							<!-- /section title -->
							@foreach($second_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->take(1) as $post)
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
							
							@foreach($second_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->slice(1)->take(2) as $post)
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
						@else
							<p class="text-center"> no posts yet </p>
						@endif
			
					@endif
				</div>
				<!-- /Column 1 -->
				
				<!-- Column 2 -->
				<div class="col-md-6 col-sm-6">
				@if($third_category)
					@if($third_category->posts->count() > 0)
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">{{ $third_category->name }}</h2>
						</div>
						<!-- /section title -->
						@foreach($third_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->take(1) as $post)
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
					
						@foreach($third_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->slice(1)->take(2) as $post)
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
					@else
						<p class="text-center"> no posts yet </p>
					@endif
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
							<h2 class="title">{{ $fourth_category ? $fourth_category->name : "no category yet" }}</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						@if($fourth_category)
							@if($fourth_category->posts->count() > 0)
							<!-- owl carousel 2 -->
							<div id="owl-carousel-2" class="owl-carousel owl-theme">
								@foreach($fourth_category->posts->where('draft',1)->where('domain',1)->sortKeysDesc()->take(4) as $post)
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
							@else
							<p class="text-center"> no posts yet </p>
							@endif
						@endif
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
	@endsection