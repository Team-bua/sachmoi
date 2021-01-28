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
							<h1>Nhà Xuất Bản</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">{{ __('hompage') }}</a></li>
								<li><a href="javascript:void(0);">Nhà Xuất Bản</a></li>
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
					Author Detail Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-authordetail">
								<div class="tg-authorcontentdetail">
									<div class="tg-sectionhead">
									<div class="tg-booksfromauthor">
										<div class="tg-sectionhead">
											<h2>{{ $company_name->name }}</h2>
										</div>
										<div class="row">
											@foreach ($product_company as $books)
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
												<div class="tg-postbook">
													  
													<figure class="tg-featureimg">
														<div class="tg-bookimg">
															<div class="tg-frontcover"><img style="height: 240px" src="{{ asset('images/product/' . $books->image) }}" alt="image" /></div>
															<div class="tg-backcover"><img style="height: 240px" src="{{ asset('images/product/' . $books->image) }}" alt="image" /></div>
														</div>
														<a class="tg-btnaddtowishlist" href="{{route('Read',$books->id)}}">
												<i class="fa fa-book" ></i>
												<span>Đọc Online</span>
													</a>
													</figure>
													<div class="tg-postbookcontent">
														<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
														<div class="tg-booktitle">
															<h3><a href="javascript:void(0);">{{ $books->name }}</a></h3>
														</div>
														<span class="tg-bookwriter"><a href="javascript:void(0);">{{$books->productCompany->name}}</a></span>
														<span class="tg-bookprice">
														  @if($books->promotion_price == 0)
												<ins style="margin-bottom: 20px">{{number_format($books->unit_price,0,"",",")}} VNĐ</ins>
												@else
												<del>{{number_format($books->unit_price,0,"",",")}} VNĐ</del>
												<ins>{{number_format($books->promotion_price,0,"",",")}} VNĐ</ins>
												@endif
														</span>
														<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
															<i class="fa fa-shopping-basket"></i>
															<em>Giỏ Hàng</em>
														</a>
														
														<a class="tg-btn tg-btnstyletwo" href="{{ route('detail', $books->id) }}" style="margin-top: 4px;">
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
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Author Detail End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection