@extends('layout_index.master')
@section('content')
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
			<!--************************************
					Best Selling Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2>{{ __("newbook") }}</h2>
								<a class="tg-btn"  href="{{  route('allnew')  }}">{{ __('all') }}</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
								@foreach ($product_new as $pro)
								<div class="item">
									<div class="tg-postbook">
										<figure class="tg-featureimg" style="height: 250px">
											<div class="tg-bookimg" >
												<div class="tg-frontcover"> <a href="{{ route('detail', $pro->id) }}"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a></div>
												<div class="tg-backcover"> <a href="{{ route('detail', $pro->id) }}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" width="150px" height="150px" /></a></div>
											</div>
											<a class="tg-btnaddtowishlist" href="{{route('Read',$pro->id)}}">
												<i class="fa fa-book" ></i>
												<span>Đọc Online</span>
											</a>
										</figure>
										<div class="tg-postbookcontent">
											<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
											<div class="tg-booktitle">
												<h3 style=" width: 150px;
												overflow: hidden;
												white-space: nowrap;
												text-overflow: ellipsis;"><a href="javascript:void(0);">{{ $pro->name }}</a></h3>
											</div>
											<span class="tg-bookwriter"><a href="javascript:void(0);">{{$pro->productCompany->name}}</a></span>
											<span class="tg-bookprice">
												  @if($pro->promotion_price == 0)
												<ins style="margin-bottom: 18px">{{number_format($pro->unit_price,0,"",",")}} VNĐ</ins>
												@else
												<del>{{number_format($pro->unit_price,0,"",",")}} VNĐ </del>
												<ins>&nbsp;&nbsp;{{number_format($pro->promotion_price,0,"",",")}} VNĐ</ins>
												@endif
											</span>
											<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
												<i class="fa fa-shopping-basket"></i>
												<em>Giỏ Hàng</em>
											</a>
										</div>
									</div>
								</div>
								 @endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Best Selling End
			*************************************-->

			<!--************************************
					New Release Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-newrelease">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-sectionhead">
									<h2><span>Taste The New Spice</span>New Release Books</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
									<a class="tg-btn" href="javascript:void(0);">Read More</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-07.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-07.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-08.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-08.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Drive Safely, No Bumping</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Sunshine Orlando</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-09.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-09.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Let The Good Times Roll Up</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Elisabeth Ronning</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					New Release End
			*************************************-->

			<!--************************************
					New Release Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-newrelease">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-sectionhead">
									<h2><span>Taste The New Spice</span>New Release Books</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
									<a class="tg-btn" href="javascript:void(0);">Read More</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-07.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-07.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-08.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-08.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Drive Safely, No Bumping</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Sunshine Orlando</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="images/books/img-09.jpg" alt="image description"></div>
														<div class="tg-backcover"><img src="images/books/img-09.jpg" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Let The Good Times Roll Up</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Elisabeth Ronning</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					New Release End
			*************************************-->
		</main>
	</div>
@endsection