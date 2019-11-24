@extends('layout.index')
    @section('content')
        <!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('welcome') }}">Home</a></li>
							<li><a href="{{ route('single_category', ['slug' => $post->category->slug ])}}">{{ $post->category->name }}</a></li>
							<li>{{ $post->title }}</li>
						</ul>
						<!-- /breadcrumb -->
					
						<!-- ARTICLE POST -->
						<article class="article article-post">
							<div class="article-main-img">
								<img src="{{ $post->featured_image }}" alt="">
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="{{ route('single_category', ['slug' => $post->category->slug ])}}">{{ $post->category->name }}</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h1 class="article-title">{{ $post->title }}</h1>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString()}}</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>{{ $post->content }}</p>
							</div>
						</article>
						<!-- /ARTICLE POST -->
						
						<!-- widget tags -->
						<div class="widget-tags">
							<div class="addthis_inline_share_toolbox"></div>
							<div class="addthis_inline_follow_toolbox"></div>
						</div>
						<!-- /widget tags -->
							
						<!-- reply form -->
						<div class="article-reply-form">
							<div class="section-title">
								<h2 class="title">Leave a reply</h2>
							</div>
							@include('layout.disqus')
						</div>
						<!-- /reply form -->
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
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMwangazawanenofm%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
							<h2 class="title">Related Post</h2>
						</div>
						<!-- /section title -->
						
						<!-- row -->
						<div class="row">
							@if($related_posts->count() > 0)
								@foreach($related_posts->sortKeysDesc()->take(4) as $r_post)
								<!-- Column 1 -->
								<div class="col-md-3 col-sm-6">
									<!-- ARTICLE -->
									<article class="article">
										<div class="article-img">
											<a href="#">
												<img src="{{ $r_post->featured_image}}" alt="">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="{{ route('single_post', ['slug'=> $r_post->slug]) }}">{{ $r_post->title }}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i>{{ $r_post->created_at->toFormattedDateString()}}</li>
												<li><i class="fa fa-comments"></i> 33</li>
											</ul>
										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
								<!-- /Column 1 -->
								@endforeach
							@else
								<p>no posts yet</p>
							@endif
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
    @endsection


