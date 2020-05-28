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
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="courses.html">Materi</a></li>
									<li><a href="blog.html">Soal</a></li>
									<li><a href="contact.html">Ujian</a></li>
									<li><a href="contact.html">Berita</a></li>
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

								<div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
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
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="courses.html">Materi</a></li>
				<li class="menu_mm"><a href="blog.html">Soal</a></li>
				<li class="menu_mm"><a href="blog.html">Ujian</a></li>
				<li class="menu_mm"><a href="contact.html">Berita</a></li>
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
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Welcome, Instructor!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Courses -->

	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center"><a href="">Materi</a></h2>
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Writing</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<!-- <div class="course_mark course_free trans_200"><a href="#">Free</a></div> -->
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Listening</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">Spanish</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<!-- <div class="course_mark course_free trans_200"><a href="#">Free</a></div> -->
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Speaking</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<!-- <div class="course_mark trans_200"><a href="#">$45</a></div> -->
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Instructors -->

	<!-- <div class="instructors">
		<div class="instructors_background" style="background-image:url(images/instructors_background.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center"><a href="">Tutor</a></h2>
				</div>
			</div>
			<div class="row instructors_row"> -->

				<!-- Instructor -->
				<!-- <div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_1.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div> -->

				<!-- Instructor -->
				<!-- <div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_2.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div> -->

				<!-- Instructor -->
				<!-- <div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_3.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
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
	</div> -->

	<!-- Register -->

	<!-- <div class="register">
		<div class="container">
			<div class="row"> -->
				
				<!-- Register Form -->

				<!-- <div class="col-lg-6">
					<div class="register_form_container">
						<div class="register_form_title">Courses For Free</div>
						<form action="#" id="register_form" class="register_form">
							<div class="row register_row">
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" placeholder="Name" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="email" class="form_input" placeholder="Email" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="tel" class="form_input" placeholder="Phone">
								</div>
								<div class="col-lg-6 register_col">
									<input type="url" class="form_input" placeholder="Site">
								</div>
								<div class="col">
									<button type="submit" class="form_button trans_200">get it now</button>
								</div>
							</div>
						</form>
					</div>
				</div> -->

				<!-- Register Timer -->

				<!-- <div class="col-lg-6">
					<div class="register_timer_container">
						<div class="register_timer_title">Register Now</div>
						<div class="register_timer_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="timer_container">
							<ul class="timer_list">
								<li><div id="day" class="timer_num">00</div><div class="timer_ss">days</div></li>
								<li><div id="hour" class="timer_num">00</div><div class="timer_ss">hours</div></li>
								<li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
								<li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center"><a href="">Berita</a></h2>
				</div>
			</div>
			<div class="row events_row">
				
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">26</div>
							<div class="event_month">may</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">TOEFL IBT Result</a></div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">27</div>
							<div class="event_month">may</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Tryout Timeline</a></div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">30</div>
							<div class="event_month">may</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Marking Scheme</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Ujian -->
	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center"><a href="">Ujian</a></h2>
				</div>
			</div>
			<div class="row events_row">
				
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">20</div>
							<div class="event_month">may</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">TOEFL IBT</a></div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">02</div>
							<div class="event_month">jun</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Last Tryout</a></div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">09</div>
							<div class="event_month">jun</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Final Exam</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

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