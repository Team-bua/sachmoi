@extends('layout_index.master')
@section('content')
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
            Main Start
          *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
             Coming Soon Start
           *************************************-->
            <div class="tg-comingsoonholder">

                <div class="tg-comingsooncontent">
                    <div class="tg-comingsoonhead">
                        <h2 style="color: rgb(72, 167, 77)">Đăng Ký tài khoản</h2>
                        <form class="tg-formtheme tg-formnewsletter">

                            <div class="form-group">
                                <label><b>Họ và tên :</b></label>
                                <input type="text" name="fullname" class="form-control @error('fullname') isvalid @enderror"
                                    placeholder="Họ Tên . . . . . ">
                                @error('fullname')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror
                                <br><br>
                                <label><b>Email</b></label>
                                <input type="email" name="username"
                                    class="form-control @error('username') isvalid @enderror"
                                    placeholder="Email . . . . . ">

                                @error('username')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror
                                <br><br>
                                <label><b>Mật Khẩu:</b></label>
                                <input type="Password" name="password"
                                    class="form-control @error('password') isvalid @enderror"
                                    placeholder="Password . . . . . ">

                                @error('password')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror
                                <br><br>
								<label><b>Xác nhận lại mật khẩu :</b></label>
                                <input type="Password" name="re_password"
                                    class="form-control @error('re_password') isvalid @enderror"
                                    placeholder="Xác nhận password . . . . . ">

                                @error('re_password')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror

								<br><br>
								<label><b> Địa chỉ :</b></label>
                                <input type="text" name="address" class="form-control @error('address') isvalid @enderror"
                                    placeholder="Địa chỉ . . . . .">

                                @error('address')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror
								<br><br>
								<label><b>Số điện thoại</b></label>
                                <input type="text" name="phone" class="form-control @error('phone') isvalid @enderror"
                                    placeholder="Điện thoại . . . . . ">

                                @error('phone')
                                    <div style="color:red; margin-top: -30px">{{ $message }}</div>
                                @enderror
                                <br><br>
                                <div style="margin-left:130px" class=" tg-btns">

                                    <a class="tg-btn" href="javascript:void(0);"> <b> Đăng Nhập </b></a>
                                   
                                </div>

								<p><b>Đã có tài khoản /</b> <a href="{{ route('login') }}">Đăng Nhập Tại Đây</a></p>
                        </form>

                    </div>
                </div>

                <!--************************************
             Coming Soon End
           *************************************-->
        </main>
        <!--************************************
            Main End
          *************************************-->
        <!--************************************


          *************************************-->
    </div>
    <!--************************************
           Wrapper End
         *************************************-->
@endsection
