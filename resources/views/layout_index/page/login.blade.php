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
				<strong class="tg-logo"><img src="images/logo-02.png" alt="image description"></strong>
				<div class="tg-comingsooncontent">
					<div class="tg-comingsoonhead">
						<h2>Stay Tuned!</h2>
						<h3>We’re Launching Very Soon</h3>
					</div>
					<div class="tg-description">
						<p>Consectetur adipisicing elit eiusmod tempor incididunt labore toloregna aliqua enim minim veniam, quis nostrud exercitation ullamcoiars.</p>
					</div>
					<div id="tg-comming-sooncounter" class="tg-comming-sooncounter">
						<div class="tg-counterbox">
							<div id="days" class="timer_box"></div>
						</div>
						<div class="tg-counterbox">
							<div id="hours" class="timer_box"></div>
						</div>
						<div class="tg-counterbox">
							<div id="minutes" class="timer_box"></div>
						</div>
						<div class="tg-counterbox">
							<div id="seconds" class="timer_box"></div>
						</div>
					</div>
				</div>
				<form class="tg-formtheme tg-formnewsletter">
					<fieldset>
						<div class="form-group">
							<label>Signup Newsletter!</label>
							<button type="submit"><i class="fa fa-paper-plane-o"></i></button>
							<input type="email" name="email" class="form-control" placeholder="Email Here">
						</div>
					</fieldset>
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
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-paymenttype"><img src="images/paymenticon.png" alt="image description"></span>
							<span class="tg-copyright">2017 All Rights Reserved By &copy; Book Library</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
@endsection