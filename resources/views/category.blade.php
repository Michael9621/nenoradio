@extends('layout.index')

    @section('content')
        <!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
           @foreach($featured_posts as $post)
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="{{ asset($post->featured_image) }}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="">{{ $category->name }}</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="{{ route('single_post', ['slug' => $post->slug ])}}">{{ $post->title }}</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
            @endforeach
		</div>
		<!-- /Owl Carousel 1 -->

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
							<h2 class="title">{{ $category->name }} cont...</h2>
							
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							@foreach($second_section_posts as $s_post)
                            <!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{ asset($s_post->featured_image) }}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="">{{ $category->name }}</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="{{ route('single_post', ['slug' => $s_post->slug ])}}">{{ $post->title }}</a></h3>
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

        <!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">	
						<!-- row -->
						<div class="row">
                            @foreach($other_posts as $o_post)
							<!-- Column 1 -->
							<div class="col-md-3 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset($o_post->featured_image)}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">{{ $o_post->title }}</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i>{{ $o_post->created_at->toFormattedDateString()}}</li>
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
						{{ $other_posts->links('vendor.pagination.blog') }}
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
    @endsection