@extends('layout_index.master')
@section('content')
	<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Tin tức</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">trang chủ</a></li>
								<li><a href="javascript:void(0);">tin tức</a></li>
								<li class="tg-active">chi tiết</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					News Grid Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-twocolumns" class="tg-twocolumns">
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
								<div id="tg-content" class="tg-content">
								@foreach ($content_detail as $con)
									<div class="tg-newsdetail">
										<ul class="tg-bookscategories">
										</ul>
										<div class="tg-themetagbox"><span class="tg-themetag">News</span></div>
										<div class="tg-posttitle">
											<h3>{{$con->name}}</a></h3>
										</div>
										<blockquote>

										<div class="tg-description" style="text-align: justify; font-size: 20px">
												<q>{!! $con->content !!}</q>
										
										</div>
										</blockquote>
									</div>
								@endforeach
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
								<aside id="tg-sidebar" class="tg-sidebar">
									<div class="tg-widget tg-catagories">
										<div class="tg-widgettitle">
											<h3>{{ __('catelory') }}</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
											 @for($i = 0; $i < count($product_n); $i++) 
														   <li><a href="{{ route('product_type', $types_id[$i]) }}"><span>{{ $types_name[$i] }}:</span><span>({{ $product_n[$i] }})</span></a>
														   </li>
														    @endfor
										
											</ul>
										</div>
										<div class="tg-widget tg-widgettrending">
										<div class="tg-widgettitle">
											<h3>{{ __('newws') }}</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
												 @foreach ($content as $con)
												<li>
													<article class="tg-post">
														<figure>  <a href="{{ route('newsdetail', [$con['id']]) }}"><img src="{{ asset('images/news/' . $con->image) }}" alt="image description"></a></figure>
														<div class="tg-postcontent">
															<div class="tg-posttitle">
																<h3>  <a href="{{ route('newsdetail', [$con['id']]) }}">{{ $con->name }}</a></h3>
															</div>

														</div>
													</article>
												</li>
												 @endforeach
											</ul>
										</div>
									</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					News Grid End
			*************************************-->
		</main>
@endsection