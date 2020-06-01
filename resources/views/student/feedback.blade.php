<!DOCTYPE html>
<html lang="en">
<head>
<title>UB-SIB | Feedback</title>
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
								<a href="/student">
									<div class="logo_text">UB-SIB</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
                                    <li><a href="/student">Home</a></li>
									<li><a href="{{url('/materi/show')}}">Materi</a></li>
                                    <li><a href="{{url('/ujian/show')}}">Ujian</a></li>
                                    <li class="active"><a href="{{url('/feedback/show')}}">Feedback</a></li>
									<li><a href="{{url('/berita/show')}}">Berita</a></li>
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
                <li class="menu_mm"><a href="/student">Home</a></li>
				<li class="menu_mm"><a href="{{url('/materi/show')}}">Materi</a></li>
                <li class="menu_mm"><a href="{{url('/ujian/show')}}">Ujian</a></li>
                <li class="menu_mm"><a href="{{url('/feedback/show')}}">Feedback</a></li>
				<li class="menu_mm"><a href="{{url('/berita/show')}}">Berita</a></li>
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

    
	<!-- Exams -->

	<div class="courses">
		<div class="container">
			<div class="row courses_row">
                <!-- Blog Content -->

                <div class="blog_container">
                    <div class="container">

                        <div class="row blog_content_row">
                            <div class="col">
                                <div class="blog_content">
                                    <div class="blog_post_title_container">
                                        <div class="blog_title">Keep up the good work!</div>
                                    </div>
                                    <div class="blog_text">
                                        <p>You have been experienced such a lot of things. Have your eyes on the progress of every single test. For the best result afterall.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <br/>
                        <br/>

                        <div class="row register">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="register_form_title">Post a Comment</div>
                                <div class="register_form_container">
                                    <form action="#" id="register_form" class="register_form" method="POST">
                                        <div class="row register_row">
                                            <div class="col-lg-6 register_col">
                                                <input type="text" class="form_input" placeholder="Name" required="required">
                                            </div>
                                            <div class="col-lg-6 register_col">
                                                <input type="email" class="form_input" placeholder="Email" required="required">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form_input form_text" placeholder="Comment" required="required"></textarea>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="form_button trans_200">post a comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
		        </div>
			</div>
		</div>
	</div>

    <footer class="footer">
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