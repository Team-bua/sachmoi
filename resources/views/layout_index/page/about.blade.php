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
							<h1>{{__('introduce') }}</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">{{ __('hompage') }}</a></li>
								<li class="tg-active">{{ __('introduce')}}</li>
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
					About Us Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-aboutus">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-aboutusshortcode">
									<div class="tg-sectionhead">
										<h2><span>Chào mừng &amp; BookStore</span>Về Chúng Tôi</h2>
									</div>
									<div class="tg-description">
										<p style="line-height:28px;text-align: justify;" >Trang web bookstore là một trong những nơi uy
											tín cung cấp các đầu sách hiện hành của nước Việt Nam. 
											Là một trong những người yêu thích sách nói chung 
											và yêu thích sự tìm tòi học hỏi nói riêng chúng tôi mong muốn mang đến cho bạn đọc 
											những quyển sách đủ thể loại gần gủi nhất đối với mọi công dân. </p>
									</div>
									
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<figure>
									<img src="images/placeholder.jpg" alt="image description">
									<iframe width="853" height="480" src="https://www.youtube.com/embed/SKVcQnyEIT8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Call to Action Start
			*************************************-->
			<section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<h2>Trang Chủ</h2>
									<h3>Xem sách </h3>
									<a class="tg-btn tg-active"  href="{{ route('index') }}">Xem Ngay</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call to Action End
			*************************************-->
			<!--************************************
					Success Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-successstory">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Chi nhánh :</span>Hà Nội - Đà Nẵng - Hồ Chí Minh</h2>
								</div>
								<div id="tg-successslider" class="tg-successslider tg-success owl-carousel">
									<div class="item">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
										</figure>
										<div class="tg-successcontent">
											<div class="tg-sectionhead">
												<h2><span>BookStore</span>Chuyên Bán</h2>
											</div>
											<div class="tg-description">
												<p   style="line-height:24px;text-align: justify;">Chuyên bán Sỉ & Lẻ các loại sách, truyên, đủ thể loại...
													Chúng tôi cung cấp dịch vụ giao sách đến tận cơ quan, đơn vị, nhà của Quý khách trên mọi miền tổ quốc
													Số lượng nhiều GỌI 0909 366 555 để nhận GIÁ SỈ
													Hiện nay công ty chúng tôi đang cung cấp một số đầu sách như: 
													Sách Công Nghệ , ...
													Và còn nhiều loại sách nổi bật khác.
													Nếu bạn đang có nhu cầu mua sách để bổ sung kiến thức hay phục vụ công việc, học tập thì nhanh tay liên hệ với chúng tôi để có giá tốt nhất nhé.</p>
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
					Success End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
									<div class="item tg-testimonial">
										<figure><img src="images/author/leader.png" alt="image description"></figure>
										<blockquote><q>Điều hành hệ thống quản lý của Website, liên hệ vói các công ty khác .</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Nhâm Hoàng Tuấn</h3>
											<span>Phân phối và chỉ đạo .</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Authors Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Liên Kết </span>Nhà Xuất Bản</h2>
							</div>
						</div>
						
						<div id="tg-teamsslider" class="tg-authors tg-authorsslider tg-teamsmember owl-carousel">
							@foreach ($company as $com)
							<div class="item tg-author tg-member">
								<figure><a href="{{ route('product_company', [$com['id']]) }}"><img style="width:620px;height:220px;" src="{{ asset('images/companies/' . $com->image) }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="{{ route('product_company',  [$com['id']]) }}">{{ $com->name }}</a></h2>
									<span>Chi Nhánh</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="{{ route('product_company', $com->id) }}">{{ $com->name }} <i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>
							@endforeach 
						
					</div>
				</div>
			</section>
			<!--************************************
					Authors End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection