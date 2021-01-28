@extends('layout_index.master')
@section('content')
<style type="text/css">
	.area {
		font-size: 15px;
		border: 2px solid #EF5050;
		resize: none;
	}

	/*--------------------------------rating------------------------------------*/

	.rating-card {
		padding: 10px;
		background-color: #F5F5F5;
		width: 70%;
		border-radius: 10px;
		text-align: center;
		margin: 0 auto;
		margin-top: 30px;
		box-shadow: 2px 2px 18px -2px #337AB7;
	}

	.fa-star,
	.fa-star-o {
		color: orange;
	}

	.rating-card h1 {
		color: #337AB7;
		margin-bottom: 30px;
	}

	.rating {
		width: 50%;
		float: left;
	}

	.rating p {
		margin-top: 10px;
		font-size: 20px;
	}

	.rating h2 {
		margin: 0px;
		font-size: 60px;
		font-weight: normal;
	}

	.rating-process {
		width: 50%;
		text-align: left;
		float: left;
	}

	.rating-right-part {
		margin-bottom: 3px;
	}

	.rating-right-part p {
		margin: 0px;
	}

	.progress,
	.progress-2,
	.progress-3,
	.progress-4,
	.progress-5 {
		background: #c2c2c2;
		border-radius: 13px;
		height: 18px;
		width: 70%;
		padding: 1px;
		margin: -21px 0px 0px 30px;
		display: block;
	}

	@media (min-width:320px) and (max-width:640px) {
		.rating {
			width: 100%;
		}

		.rating-process {
			width: 100%;
		}
	}


	/*--------------------------------rating------------------------------------*/

	.rating1 {
		display: flex;
		flex-direction: row-reverse;
		justify-content: center;
	}

	.rating1>input {
		display: none
	}

	.rating1>label {
		position: relative;
		width: 1em;
		font-size: 50px;
		color: #FFD600;
		cursor: pointer
	}

	.rating1>label::before {
		content: "\2605";
		position: absolute;
		opacity: 0
	}

	.rating1>label:hover:before,
	.rating1>label:hover~label:before {
		opacity: 1 !important
	}

	.rating1>input:checked~label:before {
		opacity: 1
	}

	.rating1:hover>input:checked~label:before {
		opacity: 0.4
	}
</style>
<!--************************************
				Inner Banner Start
		*************************************-->
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tg-innerbannercontent">
					<h1>Sản Phẩm</h1>
					<ol class="tg-breadcrumb">
						<li><a href="javascript:void(0);">{{ __('hompage') }}</a></li>
						<li><a href="javascript:void(0);">Sản Phẩm</a></li>
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
							<div class="tg-productdetail">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="tg-postbook">
											<figure class="tg-featureimg"><img src=" {{ asset('images/product/' . $product_detail->image) }}" alt="image description"></figure>
											<div class="tg-postbookcontent">
												<span class="tg-bookprice">
													@if ($product_detail->promotion_price == 0)
													<ins>{{ number_format($product_detail->unit_price, 0, '', ',') }}VNĐ</ins>
													@else
													<del>{{ number_format($product_detail->unit_price, 0, '', ',') }}VNĐ</del>
													<ins>{{ number_format($product_detail->promotion_price, 0, '', ',') }}VNĐ</ins>
													@endif
												</span>
												<button class="tg-btn tg-active tg-btn-lg" onclick="AddCart('{{ $product_detail->id }}')">Giỏ hàng</button>
												<a class="tg-btnaddtowishlist" href="{{ route('Read', $product_detail->id) }}">
													<span>Đọc Online</span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
										<div class="tg-productcontent">
											<ul class="tg-bookscategories">
												<li><a href="javascript:void(0);"></a></li>
											</ul>
											@if ($product_detail->promotion_price != 0)
											<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
											@endif
											<span class="tg-bookwriter">{{ $product_detail->name }}</span>
											@if($rating['product'])
											<?php
											$product_ra = 0;
											if ($rating['product']->total_ra) {
												$product_ra = round($rating['product']->total_number / $rating['product']->total_ra, 2);
											}

											?>
											@for($i=1; $i<=5; $i++) <i class="fa fa-star {{$i <= $product_ra ? 'active' : ''}}" style="color:#999"></i>
												@endfor
												@endif
												<div class="tg-share">
													<span>Trạng Thái:</span>
													<ul class="tg-socialicons">
														<li class="tg-facebook"> @if($store && $store->stored_product == 0)
															&emsp;<h6 class="badge badge-danger" style="font-size: 14px;background-color: #d61f16; ">Hết hàng&ensp;</h6>
															@else
															&emsp;<h6 class="badge badge-success" style="font-size: 14px;background-color: #17c55d;">Còn hàng&ensp;</h6>
															@endif</li>

													</ul>
												</div>
												<div class="tg-description">
													<textarea class="area" type="text" rows="25" cols="62" id="text" disabled style="height: 200px;">
               						 				{!! $product_detail->description !!}
            										</textarea>
													<br>
													<br>
													<div class="col-md-4">
														<div class="form-group">
															<select id="gender" class="form-control">
																<option value="Vietnamese Female" style="text-decoration: blink;">Tiếng Việt</option>
															</select>
														</div>
													</div>
													<button class="btn btn-success btn-lg" id="btPlay" onclick="playAudio()"><i class="fa fa-play"></i></button>
													<button class="btn btn-success btn-lg" id="btPause" onclick="pauseAudio()"><i class="fa fa-stop"></i></button>
												</div>
												<div class="tg-sectionhead">
													<h2>Thông Tin</h2>
												</div>
												<ul class="tg-productinfo">
													<li><span>Tác Giả:</span><span>{{ $product_detail->publisher  }}</span></li>
													<li><span>Nhà Phát Hành:</span><span>{{ $product_detail->publisher  }}</span></li>
													<li><span>Định Dạng:</span><span>{{ $product_detail->format }}</span></li>
													<li><span>Ngày Phát Hành:</span><span>{{ $product_detail->releasedate }}</span></li>
													<li><span>Ngôn Ngữ:</span><span>{{ $product_detail->language }}</span></li>
													<li><span>Kích Thước:</span><span>&amp;{{ $product_detail->size  }} Cm</span></li>
													<li><span>Số Trang:</span><span>{{ $product_detail->pagenumber  }} Trang</span></li>

												</ul>
										</div>
									</div>
									<div class="tg-productdescription">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<ul class="tg-themetabs" role="tablist">
												<li role="presentation" class="active"><a href="#description" data-toggle="tab">Đánh Giá</a></li>
											</ul>
											<div class="tg-tab-content tab-content">
												<div role="tabpanel" class="tg-tab-pane tab-pane active" id="description">
													<div class="tg-description">
														<div id="tab-specification" class="tab-content">
															@if(Auth::check())
															<form action="{{route('rating',$product_detail->id)}}" method="post">
																@csrf
																@method('put')
																<div class="cpt_product_description ">
																	<div class="rating-card">
																		<div class="rating">
																			<p><i class="fa fa-user" aria-hidden="true"></i> {{count($rating['count_ra'])}} Đánh Giá</p>
																		</div>
																		<div class="rating-process">
																			<div class="rating-right-part">
																				5<i aria-hidden="true" class="fa fa-star"></i>
																				Có {{$rating['ra_5']}} đánh giá
																			</div>
																			<div class="rating-right-part">
																				4<i aria-hidden="true" class="fa fa-star"></i>
																				Có {{$rating['ra_4']}} đánh giá

																			</div>
																			<div class="rating-right-part">
																				3<i aria-hidden="true" class="fa fa-star"></i>
																				Có {{$rating['ra_3']}} đánh giá

																			</div>
																			<div class="rating-right-part">
																				2<i aria-hidden="true" class="fa fa-star"></i>
																				Có {{$rating['ra_2']}} đánh giá

																			</div>
																			<div class="rating-right-part">
																				1<i aria-hidden="true" class="fa fa-star"></i>
																				Có {{$rating['ra_1']}} đánh giá

																			</div>
																		</div>
																		<div style="clear:both;"></div>
																	</div>
																</div>
																<div class="rating1">
																	<input type="radio" name="rating" value="5" id="5">
																	<label for="5">☆</label>
																	<input type="radio" name="rating" value="4" id="4">
																	<label for="4">☆</label>
																	<input type="radio" name="rating" value="3" id="3">
																	<label for="3">☆</label>
																	<input type="radio" name="rating" value="2" id="2">
																	<label for="2">☆</label>
																	<input type="radio" name="rating" value="1" id="1">
																	<label for="1">☆</label>
																</div>
																<center>
																	<div class="input-group mb-2">
																		<div class="input-group-prepend">
																			<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
																		</div>
																		<textarea style="resize: none;" rows="3" cols="50" class="form-control" placeholder="Nội dung đánh giá . . . . ." name="body" required></textarea>
																	</div>
																</center>
																<br>
																<div class="text-center">
																	<input type="submit" value="Gửi" class="btn btn-info btn-block">
																</div>
															</form>
															@else
															<div class="cpt_product_description ">
																<div class="rating-card">
																	<div class="rating">
																		<p><i class="fa fa-user" aria-hidden="true"></i> {{count($rating['count_ra'])}} Đánh Giá</p>
																	</div>
																	<div class="rating-process">
																		<div class="rating-right-part">
																			5<i aria-hidden="true" class="fa fa-star"></i>
																			Có {{$rating['ra_5']}} đánh giá
																		</div>
																		<div class="rating-right-part">
																			4<i aria-hidden="true" class="fa fa-star"></i>
																			Có {{$rating['ra_4']}} đánh giá

																		</div>
																		<div class="rating-right-part">
																			3<i aria-hidden="true" class="fa fa-star"></i>
																			Có {{$rating['ra_3']}} đánh giá

																		</div>
																		<div class="rating-right-part">
																			2<i aria-hidden="true" class="fa fa-star"></i>
																			Có {{$rating['ra_2']}} đánh giá

																		</div>
																		<div class="rating-right-part">
																			1<i aria-hidden="true" class="fa fa-star"></i>
																			Có {{$rating['ra_1']}} đánh giá

																		</div>
																	</div>
																	<div style="clear:both;"></div>
																</div>
															</div><br>
															<div style="float: left"> Chỉ có thành viên mới có thể nhận xét. Vui lòng <a href="{{ route('login') }}" data-toggle="modal" data-target="#tab-info">Đăng nhập</a> hoặc<a href="{{ route('signup') }}"> Đăng Ký</a></div>
															@endif
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="tg-aboutauthor">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="tg-authorbox">
												<figure class="tg-authorimg">
													<img src="images/author/imag-24.jpg" alt="image description">
												</figure>
												<div class="tg-authorinfo">
													<div class="tg-authorhead">
														<div class="tg-leftarea">
															<div class="tg-authorname">
																<h2>Kathrine Culbertson</h2>
																<span>Author Since: June 27, 2017</span>
															</div>
														</div>
														<div class="tg-rightarea">
															<ul class="tg-socialicons">
																<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="tg-description">
														<p>Laborum sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis etation.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-relatedproducts">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div id="tg-relatedproductslider" class="tg-relatedproductslider tg-relatedbooks owl-carousel">
												@foreach ($product_related as $pro)
												<div class="item">
													<div class="tg-postbook">
														<figure class="tg-featureimg" style="height: 250px">
															<div class="tg-bookimg">
																<div class="tg-frontcover"> <img style="height: 240px" src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></div>
																<div class="tg-backcover"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" width="150px" height="150px" /></div>
															</div>
															<a class="tg-btnaddtowishlist" href="{{route('Read',$pro->id)}}">
																<i class="fa fa-book"></i>
																<span>Đọc Online</span>
															</a>
														</figure>
														<div class="tg-postbookcontent">
															<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
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
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
						<aside id="tg-sidebar" class="tg-sidebar">
							<div class="tg-widget tg-widgetsearch">
								<form class="tg-formtheme tg-formsearch">
									<div class="form-group">
										<button type="submit"><i class="icon-magnifier"></i></button>
										<input type="search" name="search" class="form-group" placeholder="Tìm Kiếm....">
									</div>
								</form>
							</div>
							<div class="tg-widget tg-catagories">
								<div class="tg-widgettitle">
									<h3>{{ __('catelory') }}</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										@for($i = 0; $i < count($product_n); $i++) <li><a href="{{ route('product_type', $types_id[$i]) }}"><span>{{ $types_name[$i] }}:</span><span>({{ $product_n[$i] }})</span></a>
											</li>
											@endfor

									</ul>
								</div>
							</div>
							<div class="tg-widget tg-catagories">
								<div class="tg-widgettitle">
									<h3>{{ __('company') }}</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										@foreach ($company as $com)
										<li>
											<a href="{{ route('product_company', $com->id) }}">{{ $com->name }}</a>
										</li>
										@endforeach

									</ul>
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
@section('speak')
<script type="text/javascript">
	$(document).ready(function() {
		$("#btPlay").click(function() {
			var text = $("#text").val();
			var gender = $("#gender").val();
			responsiveVoice.speak(text, gender, {
				rate: 1
			});
		});
		$("#btPause").click(function() {
			if (responsiveVoice.isPlaying()) {
				responsiveVoice.pause();
			} else {
				responsiveVoice.resume();
			}
		});
	});
</script>
@stop