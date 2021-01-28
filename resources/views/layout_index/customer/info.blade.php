@extends('layout_index.master')
@section('content')

<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>{{ __('all') }}</h1>
                    <ol class="tg-breadcrumb">
                        <li> <a href="{{ route('index') }}">{{ __('hompage') }}</a></li>
                        <li class="tg-active">{{ __('Product') }}</li>
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
                            <div class="tg-products">
                                <div class="tg-sectionhead">
                                    <h2>{{ __("Information") }}</h2>
                                </div>
                                <form method="post" action="{{ route('changeinfo',Auth::user()->id)}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Họ tên:</label>
                                        <input type="text" name="fullname" class="form-control" value="{{$customer->full_name}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại:</label>
                                        <input type="text" name="phone" class="form-control" data-inputmask="'mask': '999-999-9999'" value="{{$customer->phone}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ:</label>
                                        <input type="text" name="address" class="form-control" value="{{$customer->address}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" name="email" class="form-control" value="{{$customer->email}}" />
                                    </div>
                                    <div class="col-3">
                                        <button class="btn black">Cập nhật thông tin </button>
                                    </div>
                                </form>

                            </div>
                            <br>
                            <br>
                            <div class="tg-products">
                                <div class="tg-sectionhead">
                                </div>
                                <div class="col-sm-4">
                                    <form method="post" action="{{ route('updatePassword',Auth::user()->id)}}">
                                        @csrf
                                        <label>Mật Khẩu Cũ</label>
                                        <div class="form-group pass_show" >
                                            <input type="password" name="password" class="form-control" placeholder="Mật Khẩu Cũ">
                                        </div>
                                        <label>Mật Khẩu Mới</label>
                                        <div class="form-group pass_show">
                                            <input type="password" name="new_password" class="form-control" placeholder="Mật Khẩu Mới">
                                        </div>
                                        <label>Nhập Lại Mật Khẩu</label>
                                        <div class="form-group pass_show">
                                            <input type="password" name="re_password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
                                        </div>
                                        <div class="col-3">
                                            <button class="btn black">Cập nhật thông tin </button>
                                        </div>
                                        <br>
                                    </form>
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
                                        <input type="search" name="search" class="form-group" placeholder="Tìm kiếm...">
                                    </div>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories">
                                <div class="tg-widgettitle">
                                    <h3>{{ __('catelory') }}</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        @for($i = 0; $i < count($product_n); $i++) <li><a href="{{ route('product_type', $types_id[$i]) }}"><span>{{ $types_name[$i] }} </span><span>({{ $product_n[$i] }})</span></a>
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
            <div class="row">
                <div class="accordion-group" style="font-size: 25px; width:97%; margin-left: 15px; ">
                    <div class="accordion-heading country">
                        <a class="accordion-toggle" data-toggle="collapse" href="#country1" style="text-decoration: blink;
                        background: #666;
                        color: #fff;
                        border: 2px solid #666;
                        border-radius: 1px; 
                        text-decoration: none;  
                        background: #fff; 
                        color: #666;">
                            Đơn Hàng Của Bạn
                        </a>
                    </div>
                    <div id="country1" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <table class="table table-striped table-condensed" style="margin-top: 15px">
                                <thead>
                                    <tr>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số Lượng</th>
                                        <th>Giá</th>
                                        <th>Ngày đặt</th>
                                        <th>Tình Trạng </th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bill as $bills)
                                    @foreach($bills->products as $product)
                                    <tr>
                                        <td><img style="width:120px;height:100px;" src="{{ asset('images/product/' . $product->image) }}"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->pivot->quantity}}</td>
                                        <td>{{number_format($product->pivot->unit_price)}} VNĐ</td>
                                        <td>{{$bills->created_at->format('d/m/y')}}</td>
                                        <td> @if($bills->status == 0)
                                            <button type="button" class="btn btn-default">Đang xử lý</button>
                                            @elseif($bills->status == 1)
                                            <button type="button" class="btn btn-primary">Tiếp nhận</button>
                                            @elseif($bills->status == 2)
                                            <button type="button" class="btn btn-success">Đã giao</button>
                                            @elseif($bills->status == 3)
                                            <button type="button" class="btn btn-danger">Thất bại</button>
                                            @endif
                                        </td>
                                        <td>{{number_format($product->pivot->unit_price * $product->pivot->quantity)}} VNĐ</td>
                                    </tr>

                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
@section('show')
<script type="text/javascript">
    $(document).ready(function() {
        $('.pass_show').append('<span class="ptxt">hiện</span>');
    });

    $(document).on('click', '.pass_show .ptxt', function() {

        $(this).text($(this).text() == "ẩn" ? "hiện" : "ẩn");

        $(this).prev().attr('type', function(index, attr) {
            return attr == 'password' ? 'text' : 'password';
        });

    });
</script>
@stop