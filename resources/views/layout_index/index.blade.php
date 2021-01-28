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
								<h2>{{ __("salebook") }}</h2>
								<a class="tg-btn"  href="{{  route('allnew')  }}">{{ __('all') }}</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
								@foreach ($product_sale as $pro)
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
												<h3><a href="javascript:void(0);">{{ $pro->name }}</a></h3>
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
											<a class="tg-btn tg-btnstyletwo" onclick="AddCart('{{ $pro->id }}')">
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
									<h2><span></span>{{ __("newbook") }}</h2>
								</div>
								<div class="tg-description" >
									<p style="line-height:28px;text-align: justify;" > Bạn đọc thân mến, như chúng ta đã biết, 
										sách là một công cụ hỗ trợ đắc lực trong việc nghiên cứu giảng dạy,
										 học tập và nâng cao tri thức. Vì vậy, 
										 hàng tháng cửa hàng chúng tôi sẽ lần lượt giới thiệu những quyển sách mới, sách hay đến bạn đọc.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active"  href="{{ route('allnew') }}">Xem thêm</a>
									
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								
								<div class="row">
									<div class="tg-newreleasebooks">
										@foreach ($product_new as $pro)
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
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
													<div class="tg-themetagbox"><span class="tg-themetag">new</span></div>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">{{ $pro->name }}</a></h3>
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
					</div>
				</div>
			</section>
			<!--************************************
					New Release End
			*************************************-->
			<!--************************************
					Picked By Author Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2>{{ __("hotbook") }}</h2>
								<a class="tg-btn" href="{{ route('allnew') }}">{{ __('all') }}</a>
							</div>
						</div>
						<div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
							@foreach ($product_hightlights as $pro)
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"> <a href="{{ route('detail', $pro->id) }}"><img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a></div>
										</div>
										<div class="tg-hovercontent">
											@if ($pro->new == 1)
											<div class="tg-themetagbox"><span class="tg-themetag">hot</span></div>
											@endif
											<div class="tg-description">
												<p> {!! $pro->description !!}</p>
											</div>
											<strong class="tg-bookpage">{{ $pro->name }}</strong>
											<strong class="tg-bookcategory">{{$pro->productCompany->name}}</strong>
											  @if($pro->promotion_price == 0)
											  <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
											@else
											<span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                           					</span>
                            				<span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                            				</span>
											 @endif
										</div>
									</figure>
									<div class="tg-postbookcontent">
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
			</section>
			<!--************************************
					Picked By Author End
			*************************************-->
		</main>
	</div>
@endsection