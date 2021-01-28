        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-addnav">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-question-circle"></i>
                                        <em>{{ __('free ship') }}</em>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-phone"></i>
                                        <em>{{ __('phone') }}: 0779 750 123 || 0945 555 666</em>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown tg-themedropdown tg-currencydropdown" style="margin-left: 4%">
                                <a href="{!! route('user.language', ['en']) !!}">
                                    <span><img src="{{ asset('images/icon/tienganh.png') }}" height="25px" width="25px"></span>
                                </a>
                                <a href="{!! route('user.language', ['vi']) !!}">
                                    <span><img src="{{ asset('images/icon/tiengviet.png') }}" height="25px" width="25px"></span>
                                </a>
                            </div>
                            @if (Auth::check())
                            @if (Auth::user()->id_role == 1 || Auth::user()->id_role == 2)
                            <div class="tg-userlogin">
                                <figure><a href="javascript:void(0);"><img src="" alt="image description"></a></figure>
                                <a href="{{ route('admin') }}"><span>{{ Auth::user()->full_name }}</span></a>
                                <br>
                                <a href="{{ url('logout') }}"><span>{{ __('logout') }}</span></a>
                            </div>
                        </div>
                        @else
                        <div class="tg-userlogin">
                            <figure><a href="javascript:void(0);"><img src="images/users/img-01.jpg" alt="image description"></a></figure>
                            <a href="{{ route('info',Auth::user()->id) }}"> <span>{{ Auth::user()->full_name }}</span> </a>
                            <br>
                            <a href="{{ url('logout') }}"> <span>{{ __('logout') }}</span> </a>
                        </div>
                        @endif
                        @else
                        <div class="tg-userlogin">
                            <a href="{{ route('login') }}"><span>Đăng Nhập</span></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>
            <div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="{{ route('index') }}"><img src="" alt="company name here"></a></strong>
                            <div  class="tg-wishlistandcart">
                                <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                    <a  href="{{ route('cart') }}" id="tg-minicart" class="tg-btn" aria-haspopup="true" aria-expanded="false">
                                        <span style=" margin-left:28px;margin-top:11px "class="tg-themebadge quntity"> @if (Session::has('cart'))
                                            {{ Session('cart')->totalQty }}
                                            @else 0 @endif
                                        </span>
                                        <i style="font-size: 20px" class="icon-cart"></i>
                                        <span style="font-size: 16px"class="total-price">( @if(Session::has('cart')) {{number_format($cart->totalPrice)}} @else 0 @endif VNĐ )</span>
                                    </a>

                                </div>
                            </div>
                            <div class="tg-searchbox"  style="margin-top:18px">
                                <form class="tg-formtheme tg-formsearch" role="search" method="get" id="searchform" action="{{ route('search') }}">
                                    <fieldset>
                                        <input type="text" value="" name="key" id="s" class="typeahead form-control" placeholder="Nhập Từ Khóa" autocomplete="off">
                                        <button type="submit"><i class="icon-magnifier"></i></button>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                    <ul>
                                        <li>
                                            <a href="{{ route('index') }}">{{ __('hompage') }}</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="">{{ __('catelory') }}</a>
                                            <div class="mega-menu">
                                                <ul class="tg-themetabnav" role="tablist">
                                                    @for($i = 0; $i < count($product_n); $i++) <li><a href="{{ route('product_type', $types_id[$i]) }}">{{ $types_name[$i] }} ({{ $product_n[$i] }})</a>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="{{ route('all_book') }}">{{ __('all') }}</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('allnew') }}">{{ __("newbook") }}</a>
                                        </li>
                                        <li><a href="{{ route('allsale') }}">{{ __("salebook") }}</a>
                                        </li>
                                        <li><a href="{{  route('allhighlights')  }}">{{ __("hotbook") }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#"> {{ __('company') }}</a>
                                    <ul class="sub-menu">
                                        @foreach ($company as $com)
                                        <li><a href="{{ route('product_company', $com->id) }}">{{ $com->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('introduce') }}">{{ __('introduce') }} </a></li>

                                <li><a href="{{ route('news') }}">{{ __('newws') }}</a></li>
                                </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->