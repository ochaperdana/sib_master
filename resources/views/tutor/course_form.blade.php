<!DOCTYPE html>
<html lang="en">
<head>
<title>UB-SIB | Tutor</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div class="logo_text">UB-SIB</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="/tutor">Home</a></li>
									<li class="active"><a href="{{action('MateriController@create', 'tutor')}}">Materi</a></li>
									<li><a href="{{action('SoalController@show', 'tutor')}}">Soal</a></li>
									<li><a href="{{action('FeedbackController@create')}}">Feedback</a></li>
									<li><a href="">Forum</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
											<input type="search" class="header_search_input trans_400" placeholder="Cari..." required="required">
											<div class="search_button">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</form>
									</div>
								</div>

								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/tutor">Home</a></li>
				<li class="menu_mm"><a href="{{action('MateriController@create', 'tutor')}}">Materi</a></li>
				<li class="menu_mm"><a href="{{action('SoalController@show', 'tutor')}}">Soal</a></li>
				<li class="menu_mm"><a href="{{action('FeedbackController@create')}}">Feedback</a></li>
				<li class="menu_mm"><a href="">Forum</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

    <!-- Form -->
    <div class="register">
		<div class="container">
			<div class="row">
				
				<!-- Register Form -->

				<div class="col-lg-12">
					<div class="register_form_container">
						<div class="register_form_title">Entry Materi</div>
						<form action="{{action('MateriController@store')}}" id="register_form" class="register_form" method="POST">
                        {{csrf_field()}}
							<div class="row register_row">
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" name="id_materi" placeholder="ID Materi" value="<?php echo rand(10, 2301); ?>">
								</div>
                                <div class="col-lg-6 register_col">
                                    <label for="id_kategori">Kategori</label><br>
                                    <select class="form-control" name="id_kategori" class="form_input">
                                        <option value="1">Basic Reading</option>
                                        <option value="2">Basic Listening</option>
                                    </select>
								</div>
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" name="judul" placeholder="Judul Materi" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="textarea" class="form_input" name="ket" placeholder="Keterangan" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="file" class="form_input" name="file" placeholder="File">
								</div>
								<div class="col-lg-6 register_col">
									<input type="textarea" class="form_input" name="isi" placeholder="Isi Materi" required="required">
								</div>
								<div class="col-lg-6 register_col">
                                    <label for="type_materi">Tipe Materi</label><br>
                                    <select class="form-control" name="type_materi" class="form_input">
                                        <option value="materi">Materi</option>
										<option value="tips">Tips</option>
										<option value="trick">Trick</option>
                                    </select>
								</div>
                                <div class="col-lg-6 register_col">
                                    <label for="type_siswa">Tipe Siswa</label><br>
                                    <select class="form-control" name="type_siswa" class="form_input">
                                        <option value="free">Free</option>
                                        <option value="member">Member</option>
                                    </select>
								</div>
								<div class="col">
									<button type="submit" class="form_button trans_200">Simpan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <footer class="footer">
		<!-- <div class="footer_body">
			<div class="container">
				<div class="row"> -->

					<!-- Newsletter -->
					<!-- <div class="col-lg-3 footer_col">
						<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
							<div class="footer_logo mb-auto"><a href="#">UB-SIB</a></div>
							<div class="footer_title">Subscribe</div>
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Email" required="required">
								<button class="newsletter_button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
							</form>
						</div>
					</div> -->

					<!-- About -->
					<!-- <div class="col-lg-2 offset-lg-3 footer_col">
						<div>
							<div class="footer_title">About Us</div>
							<ul class="footer_list">
								<li><a href="#">Courses</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div> -->

					<!-- Help & Support -->
					<!-- <div class="col-lg-2 footer_col">
						<div class="footer_title">Help & Support</div>
						<ul class="footer_list">
							<li><a href="#">Discussions</a></li>
							<li><a href="#">Troubleshooting</a></li>
							<li><a href="#">Schools FAQs</a></li>
							<li><a href="#">Test FAQs</a></li>
						</ul>
					</div> -->

					<!-- Privacy -->
					<!-- <div class="col-lg-2 footer_col clearfix">
						<div>
							<div class="footer_title">Privacy & Terms</div>
							<ul class="footer_list">
								<li><a href="#">Community Guidelines</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div> -->


		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="cr_right ml-md-auto">
								<div class="footer_phone"><span class="cr_title">phone:</span>+44 300 303 0266</div>
								<div class="footer_social">
									<span class="cr_social_title">follow us</span>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>