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
							<h1>{{ __('Check Out') }}</h1>
							<ol class="tg-breadcrumb">
								<li> <a href="{{ route('index') }}">{{ __('hompage') }}</a></li>
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
					Contact Us Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-contactus">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>{{ __('Say Hello!') }}</span>{{ __('Please Pay') }}</h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="col-lg-8">
                            <div class="checkout-inner">
                                <div class="checkout-summary">
                                    <h1 style="font-family:Times New Roman;">Tổng số giỏ hàng</h1>
                                    <p class="ship-cost" style="font-family:Times New Roman;">Số lượng<span>
                                            @if (Session::has('cart'))
                                            {{ number_format($totalQty) }} @else 0 @endif
                                        </span></p>
                                    <h2 style="font-family:Times New Roman;">Thành tiền<span>
                                            @if (Session::has('cart'))
                                            {{ number_format($totalPrice) }} @else 0 @endif VNĐ
                                        </span></h2>

                                </div>
                                <div class="checkout-payment">
                                    <div class="payment-methods">
                                        <h1 style="font-family:Times New Roman;">Hình thức thanh toán</h1>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" checked id="payment-1"
                                                    name="payment" value="COD">
                                                <label class="custom-control-label" name="payment" for="payment-1"
                                                    style="font-family:Times New Roman;">Thanh toán khi nhận hàng</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-btn">
                                        <button>Thanh Toán</button>
                                    </div>
                                </div>
                            </div>
                        </div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<form action="{{ url('checkout') }}" method="post" class="tg-formtheme tg-formcontactus" >
									<fieldset>
										<div class="form-group">
											<input type="text" value="{{ $name }}" name="Họ và tên*" class="form-control" placeholder="First Name*">
										</div>
										<div class="form-group">
											<input name="email" type="text" value="{{ $email }}" class="form-control" placeholder="E-mail*">
										</div>
										<div class="form-group">
											<input name="phone" type="text" value="{{ $phone }}" class="form-control" placeholder="Số Điện Thoại*">
										</div>
										<div class="form-group">
											<input name="address" type="text" value="{{ $address }}" class="form-control" placeholder="Địa Chỉ">
										</div>
										<div class="form-group">
											<button type="submit" class="tg-btn tg-active">Thanh Toán</button>
										</div>
									</fieldset>
								</form>
								<div class="tg-contactdetail">
									<div class="tg-sectionhead">
										<h2>{{ __("Information") }}</h2>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-apartment"></i>
											<address>Tầng 5 , 123 Tiên Sơn - Thành Phố Đà Nẵng</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>
                                                <em>0925 - 562 - 321</em>
                                                <em>0511 - 2455 - 255</em>
                                            </span>
										</li>
										<li>
											<i class="icon-clock"></i>
											 <span>Mở cửa từ Thứ 2 đến thứ 7</span>
										</li>
										<li>
											<i class="icon-envelope"></i>
											<span>
                                                <em><a href="mailto:support@domain.com">bookstore@gmail.com</a></em>
                                                <em><a href="mailto:info@domain.com">bookstore@domain.com</a></em>
                                            </span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Contact Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection