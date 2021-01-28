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
								<h2>{{ __("hotbook") }}</h2>
								<a class="tg-btn"  href="{{  route('all_book')  }}">{{ __('all') }}</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
								@foreach ($product_hightlights as $pro)
								<div class="item">
									<div class="tg-postbook">
										<figure class="tg-featureimg" style="height: 250px">
											<div class="tg-bookimg" >
												<div class="tg-frontcover"> <img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></div>
												<div class="tg-backcover"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" width="150px" height="150px" /></div>
											</div>
											<a class="tg-btnaddtowishlist" href="{{route('Read',$pro->id)}}">
												<i class="fa fa-book" ></i>
												<span>Đọc Online</span>

											</a>
										</figure>

										<div class="tg-postbookcontent">
											 @if ($pro->new == 1)
											<div class="tg-themetagbox"><span class="tg-themetag">hot</span></div>
											 @endif
											 <ul class="tg-bookscategories">
											</ul>
											<div class="tg-booktitle">
												<h3><a href="{{ route('detail', $pro->id) }}">{{ $pro->name }}</a></h3>
											</div>
											<span class="tg-bookwriter"><a href="javascript:void(0);">{{$pro->productCompany->name}}</a></span>
											<span class="tg-bookprice">
												  @if($pro->promotion_price == 0)
												<ins style="margin-bottom: 20px">{{number_format($pro->unit_price,0,"",",")}} VNĐ</ins>
												@else
												<del>{{number_format($pro->unit_price,0,"",",")}} VNĐ </del>
												<ins>&nbsp;&nbsp;{{number_format($pro->promotion_price,0,"",",")}} VNĐ</ins>
												@endif
											</span>
											<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);" onclick="AddCart('{{$pro->id}}')">
												<i class="fa fa-shopping-basket"></i>
												<em>Giỏ Hàng</em>
											</a>
											<a class="tg-btn tg-btnstyletwo" href="{{ route('detail', $pro->id) }}" style="margin-top: 4px;">
												<i class="fa fa-info" ></i>
												<em>Chi Tiết</em>
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
									<h2>{{ __("newbook") }}</h2>
								</div>
								<div class="tg-description">
									<p></p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="{{ route('allnew') }}">{{ __('all') }}</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
										@foreach ($product_new as $pro)
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></div>
														<div class="tg-backcover"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></div>
													</div>
													<a class="tg-btnaddtowishlist" href="{{route('Read',$pro->id)}}">
												<i class="fa fa-book" ></i>
												<span>Đọc Online</span>

											</a>
												</figure>
												<div class="tg-postbookcontent">
													<div class="tg-themetagbox"><span class="tg-themetag">new</span></div>
													<ul class="tg-bookscategories">
													</ul>
													<div class="tg-booktitle">
														<h3><a href="{{ route('detail', $pro->id) }}">{{ $pro->name }}</a></h3>
													</div>
													<span class="tg-bookwriter">{{$pro->productCompany->name}}</span>
													<span class="tg-bookprice">
												  @if($pro->promotion_price == 0)
												<ins style="margin-bottom: 20px">{{number_format($pro->unit_price,0,"",",")}} VNĐ</ins>
												@else
												<del>{{number_format($pro->unit_price,0,"",",")}} VNĐ </del>
												<ins>&nbsp;&nbsp;{{number_format($pro->promotion_price,0,"",",")}} VNĐ</ins>
												@endif
											</span>
												</div>
											</div>
										</div>
										    @endforeach
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
									<h2>{{ __("salebook") }}</h2>
								</div>
								<div class="tg-description">
									<p></p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="{{ route('allsale') }}">{{ __('all') }}</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
										 @foreach ($product_sale as $pro)
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image " /></div>
														<div class="tg-backcover"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image " /></div>
													</div>
														<a class="tg-btnaddtowishlist" href="{{route('Read',$pro->id)}}">
												<i class="fa fa-book" ></i>
												<span>Đọc Online</span>

											</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
										
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">{{ $pro->name }}</a></h3>
													</div>
													<span class="tg-bookwriter">{{$pro->productCompany->name}}</span>
													<span class="tg-bookprice">
												  @if($pro->promotion_price == 0)
												<ins style="margin-bottom: 20px">{{number_format($pro->unit_price,0,"",",")}} VNĐ</ins>
												@else
												<del>{{number_format($pro->unit_price,0,"",",")}} VNĐ </del>
												<ins>&nbsp;&nbsp;{{number_format($pro->promotion_price,0,"",",")}} VNĐ</ins>
												@endif
											</span>
												</div>
											</div>
										</div>
										@endforeach
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