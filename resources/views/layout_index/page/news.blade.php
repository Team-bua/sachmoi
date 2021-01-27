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
					<h1>Tin Tức</h1>
					<ol class="tg-breadcrumb">
						<li><a href="javascript:void(0);">trang chủ</a></li>
						<li class="tg-active">tin tức</li>
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
							<div class="tg-newsgrid">
								<div class="tg-sectionhead">
									<h2>Tin Tức</h2>
								</div>
								<div class="row">
									@foreach ($content as $con)
									<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
										<article class="tg-post">
											<figure><a href="{{ route('newsdetail', [$con['id']]) }}"><img style="width:620px;height:220px;" src="{{ asset('images/news/' . $con->image) }}" alt="image description"></a></figure>
											<div class="tg-postcontent">
												<ul class="tg-bookscategories">
												</ul>
												<div class="tg-posttitle">
													<h3 style=" width:250px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><a href="{{ route('newsdetail', [$con['id']]) }}">{{$con->name}}</a></h3>
												</div>
												<span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Tuấn Râu</a></span>
												<ul class="tg-postmetadata">
													<li><a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a></li>
												</ul>
											</div>
										</article>
									</div>
									@endforeach
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
										<input type="search" name="search" class="form-group" placeholder="Search Here">
									</div>
								</form>
							</div>
							<div class="tg-widget tg-catagories">
								<div class="tg-widgettitle">
									<h3>Danh mục sách</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
							
										@for($i = 0; $i < count($product_n); $i++) 
										<li><a href="{{ route('product_type', $types_id[$i]) }}">{{ $types_name[$i] }} ({{ $product_n[$i] }})</a></li>
										@endfor
								</div>
							</div>
							<div class="tg-widget tg-widgettrending">
								<div class="tg-widgettitle">
									<h3>Bài đăng</h3>
								</div>
								<div class="tg-widgetcontent">
								@foreach ($content as $con)
									<ul>
										<li>
											<article class="tg-post">
												<figure><a href="{{ route('newsdetail', [$con['id']]) }}"><img style="width:100px;height:80px;" src="{{ asset('images/news/' . $con->image) }}" alt="image description"></a></figure>
												<div class="tg-postcontent">
													<div class="tg-posttitle">
														<h3 style=" width:150px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><a href="{{ route('newsdetail', [$con['id']]) }}">{{$con->name}}</a></h3>
													</div>
													<span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Tuấn Râu</a></span>
												</div>
											</article>
									</ul>
								@endforeach
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
<!--************************************
				Main End
		*************************************-->
@endsection