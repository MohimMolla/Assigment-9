<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Dominic - Responsive HTML5 OnePage Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('asset/frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('asset/frontend/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/custom.css')}}">
	<script src="{{ asset('asset/frontend/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>
		</div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

{{-- navbar --}}
@include('frontend.navbar')
{{-- navbar --}}

	<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('asset/frontend/uploads/banner-01.jpg')}}">
		<div class="heading">
			<h1>Hello i'm Mohim Molla</h1>
			<p>"Mohim Molla: A Proficient PHP Laravel Developer <br> Shaping the Digital Landscape "</p>
			<h3 class="cd-headline clip is-full-width">
				<span>Pioneering Excellence in  </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Developer</b>
					<b>Web Design</b>
					<b>UX Design</b>
					<b>UI Design</b>
					<b>PHP Laravel Development</b>
				</span>
			</h3>
		</div>
	</section>

	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>ABOUT MOHIM.</h2>
                        <p> In the bustling world of web development, few names stand out for their expertise and dedication to crafting seamless digital experiences. One such luminary is Mohim Molla, a distinguished PHP Laravel developer whose passion for innovation and mastery of technology has redefined the realm of web applications. </p>
						<p>With a penchant for problem-solving and an insatiable curiosity for the intricacies of coding, Mohim embarked on his journey into the realm of web development. Armed with a solid foundation in PHP and an unwavering enthusiasm for Laravel, he swiftly ascended through the ranks, establishing himself as a trailblazer in his field.</p>

                        <a href="#" class="sim-btn btn-hover-new" data-text="Download CV"><span>Download CV</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{ asset('asset/frontend/uploads/about_04.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Services</h3>
                <p>We specialize in crafting dynamic, user-centric websites tailored to meet your unique business needs. From concept to execution, our team of skilled developers and designers work collaboratively to create engaging online experiences.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Development</h2>
						<p>"Web Development: The art of crafting digital experiences. It merges design and functionality, shaping user-friendly websites and applications. From coding languages like HTML, CSS, and JavaScript to dynamic frameworks, developers create innovative online platforms</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive Design</h2>
						<p>Responsive Design: Tailoring websites to adapt beautifully across devices, ensuring users experience seamless navigation and content accessibility, regardless of screen size, fostering an inclusive and engaging online presence.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Creative Design</h2>
						<p>Infusing innovation and imagination into visual and functional elements, it transcends boundaries to captivate audiences. By harmonizing aesthetics and usability, it births unique and impactful digital experiences, shaping memorable and immersive online journeys.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Support</h2>
						<p>Providing essential assistance for website maintenance, troubleshooting, and enhancements. It ensures seamless functionality, security, and user experience, offering timely solutions to technical issues, updates, and optimizations, keeping online platforms reliable and optimized for continual performance.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Idea</h2>
						<p>The genesis of innovative concepts driving online experiences. It sparks creativity, shaping the blueprint for engaging websites or applications. From inception to execution, it fuels the development of unique digital solutions, reshaping the virtual landscape with fresh, impactful ideas.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>Proficient in leveraging the Laravel framework to craft robust, scalable web solutions. Skilled in PHP, they design secure, efficient applications with seamless functionalities, ensuring high-performance websites. Their expertise in Laravel streamlines development, delivering dynamic and customized digital experiences for diverse business needs</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Portfolio</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>

			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-01.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-01.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-02.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-02.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-03.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-03.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-04.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-04.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-05.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-05.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('asset/frontend/uploads/gallery_img-06.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('asset/frontend/uploads/gallery_img-06.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	 <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Testimonials</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_01.png')}}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_02.pn')}}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_03.png')}}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_01.png')}}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_02.png')}}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('asset/frontend/uploads/testi_03.png')}}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Blog</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('asset/frontend/uploads/blog-01.jpg')}}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('asset/frontend/uploads/blog-02.jpg')}}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('asset/frontend/uploads/blog-03.jpg')}}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contact</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Send Message" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">MOHIM MOLLa</a> Design By :
					<a href=""> Html design, PHP LARAVEL development
                        </a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('asset/frontend/js/all.js') }}"></script>
	<!-- Camera Slider -->
	<script src="{{ asset('asset/frontend/js/jquery.mobile.customized.min.js')}}"></script>
	<script src="{{ asset('asset/frontend/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{ asset('asset/frontend/js/parallaxie.js')}}"></script>
	<script src="{{ asset('asset/frontend/js/headline.js')}}"></script>
	<!-- Contact form JavaScript -->
    <script src="{{ asset('asset/frontend/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('asset/frontend/js/contact_me.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('asset/frontend/js/custom.js')}}"></script>
    <script src="{{ asset('asset/frontend/js/jquery.vide.js')}}"></script>

</body>
</html>
