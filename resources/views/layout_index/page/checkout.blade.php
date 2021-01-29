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
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
									  @if (Session::has('cart'))
									   @foreach ($product_cart as $pro)
										<div class="media">
											<img width="25%" src="{{ asset('images/product/' . $pro['item']['image']) }}" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">{{ $pro['item']['name'] }}</p>
												<span class="color-gray your-order-info">{{ number_format($pro['price']) }} VNĐ</span><br>
												<span class="color-gray your-order-info">Số Lượng : {{ $pro['qty'] }}</span>
											</div>
										</div>
										 @endforeach
										 @endif
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-left" ><h5 class="color-black" style="margin-left: 15px"> @if (Session::has('cart'))
                                            {{ number_format($totalPrice) }} @else 0 @endif VNĐ</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
									</li>									
								</ul>
							</div> <!-- .your-order -->
							</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								  @if (Session::has('flag'))
                    <div class="alert alert-{{ Session::get('flag') }}">{{ Session::get('messege') }} </div>
                @endif
								<form action="{{ url('checkout') }}" method="post" class="tg-formtheme tg-formcontactus" >
									 @csrf
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