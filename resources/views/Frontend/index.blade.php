<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->
    @extends('Frontend.layouts.main')
    @section('content')

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>

                                <div class="book-ur-car">
                                    <form action="index2.html">
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select">
                                              <option selected>Pick Location</option>
                                              <option value="1">Dhaka</option>
                                              <option value="2">Comilla</option>
                                              <option value="3">Barishal</option>
                                              <option value="3">Rangpur</option>
                                            </select>
                                        </div>

                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Pick Date" />
                                        </div>

                                        <div class="retern-date bookinput-item">
                                            <input id="endDate2" placeholder="Return Date" />
                                        </div>

                                        <div class="car-choose bookinput-item">
                                            <select class="custom-select">
                                              <option selected>Choose Car</option>
                                              <option value="1">BMW</option>
                                              <option value="2">Audi</option>
                                              <option value="3">Lexus</option>
                                            </select>
                                        </div>

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit">Book Car</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->



    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>RENTAL CAR</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>CAR REPAIR</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>TAXI SERVICE</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>life insurance</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>car wash</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>call driver</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>CARS IN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choose your Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->
                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    <a href="#" data-filter=".con">Conver</a>
                                    <a href="#" data-filter=".hat">Truck</a>
                                    <a href="#" data-filter=".mpv">MPV</a>
                                    <a href="#" data-filter=".sedan">Sedan</a>
                                    <a href="#" data-filter=".suv">SUV</a>
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 con suv mpv">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                    <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Dodge Ram 1500</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2017</a>
                                                    <a href="#">manual</a>
                                                    <a href="#">AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 hat sedan">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                    <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Dodge Ram 1500</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2017</a>
                                                    <a href="#">manual</a>
                                                    <a href="#">AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 suv con mpv">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-3.jpg">
                                                   <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Dodge Ram 1500</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2017</a>
                                                    <a href="#">manual</a>
                                                    <a href="#">AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 con hat">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                    <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Dodge Ram 1500</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2017</a>
                                                    <a href="#">manual</a>
                                                    <a href="#">AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Team Area Start ==-->
    <section id="team-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Creative Persons</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <!-- Team Tab Menu start -->
                            <div class="col-lg-4">
                                <div class="team-tab-menu">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab_item_1" data-toggle="tab" href="#team_member_1" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    <img src="assets/img/team/team-mem-thumb-1.png" alt="JSOFT">
                                                </div>
                                                <h5>Raju Ahammad</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab_item_2" data-toggle="tab" href="#team_member_2" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    <img src="assets/img/team/team-mem-thumb-3.png" alt="JSOFT">
                                                </div>
                                                <h5>Vongchong Smith</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab_item_3" data-toggle="tab" href="#team_member_3" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    <img src="assets/img/team/team-mem-thumb-2.png" alt="JSOFT">
                                                </div>
                                                <h5>Alex Tuntuni</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab_item_4" data-toggle="tab" href="#team_member_4" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    <img src="assets/img/team/team-mem-thumb-4.png" alt="JSOFT">
                                                </div>
                                                <h5>Any Anderssen</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Team Tab Menu End -->

                            <!-- Team Tab Content start -->
                            <div class="col-lg-8">
                                <div class="tab-content" id="myTabContent">
                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade show active" id="team_member_1" role="tabpanel" aria-labelledby="tab_item_1">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic">
                                                    <img src="assets/img/team/team-mem-1.png" alt="JSOFT">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>Raju Ahammad</h4>
                                                    <h5>Developer</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                    <div class="team-social-icon">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->

                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade" id="team_member_2" role="tabpanel" aria-labelledby="tab_item_2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic">
                                                    <img src="assets/img/team/team-mem-3.png" alt="JSOFT">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>Vongchong Smith</h4>
                                                    <h5>Designer</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                    <div class="team-social-icon">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->

                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade" id="team_member_3" role="tabpanel" aria-labelledby="tab_item_3">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic">
                                                    <img src="assets/img/team/team-mem-2.png" alt="JSOFT">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>Alex Tuntuni</h4>
                                                    <h5>Marketer</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                    <div class="team-social-icon">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->

                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade" id="team_member_4" role="tabpanel" aria-labelledby="tab_item_4">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic">
                                                    <img src="assets/img/team/team-mem-4.png" alt="JSOFT">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>Any Anderssen</h4>
                                                    <h5>Manager</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                    <div class="team-social-icon">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->
                                </div>
                            </div>
                            <!-- Team Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Team Area End ==-->

    <!--== Articles Area Start ==-->
    
    <!--== Articles Area End ==-->

    @endsection

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.14/combined/js/gijgo.min.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>