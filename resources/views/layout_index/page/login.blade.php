@extends('layout_index.master')
@section('content')
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	<form action="{{url('login')}}" method="post">
		@csrf
		@if(Session::has('flag'))
		<div class="alert alert-{{Session::get('flag')}}">{{Session::get('messege')}} </div>
		@endif
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
						<h2 style="color: rgb(72, 167, 77)">Đăng Nhập</h2>
						
					
							<div class="form-group">
								<label ><b>Tên Đăng Nhập :</b></label>
								<input type="text" name="" class="form-control" placeholder="Username . . . . .">
								<br><br>
								<label><b>Mật Khẩu:</b></label>
								<input type="password" name="" class="form-control" placeholder="Password . . . . .">
								<br><br>
								
								<div style="margin-left:130px" class=" tg-btns">
									<center>
									<button class="tg-btn" > <b> Đăng Nhập </b></button>
									
								</div>
							
							</div>
							
						 <p style="margin-top:30px"  ><b>Chưa có tài khoản </b><a href=" {{route('signup')}}">Đăng ký ngay !!</a></p>
				
					
					</div>
				</form>
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