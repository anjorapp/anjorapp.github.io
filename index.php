<?php
define("BASEPATH", dirname(__FILE__));
$Appsetting= BASEPATH . DIRECTORY_SEPARATOR . "_sys". DIRECTORY_SEPARATOR ."init_var.php";
include $Appsetting;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$co['name'];?>">
    <meta name="keywords" content="<?=$co['name'];?>, services, computer, remote access, computer fix">
    <!-- Main Page Title -->
	<title><?=$co['name'];?> </title>
    <!--Fevicon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
	<!--font-Google-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800" rel="stylesheet">
	<!-- Font-awesome css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Main Slider css -->
	<link rel="stylesheet" href="assets/css/camera.css">
	<!-- Magnific css -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- Owl carousel css -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Main style css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body data-spy="scroll" data-target=".header-area" data-offset="50" id="home">
	<!--==================================================================== 
							Start Preloader Section 
	=====================================================================-->
	<div class="preloader">
	    <div class="preloader-inner-area">
	        <div class="loader-overlay">
	            <div class="l-preloader">
	                <div class="c-preloader"></div>
	            </div>
	        </div>
	    </div>
	</div> 
	<!--==================================================================== 
							End Preloader Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Header Section 
	=====================================================================-->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
                    <div class="logo"> <!--/Start Logo Area -->
                        <a href="<?php BASEPATH ?>">
						
                        <img src="assets/images/philtellogo.png" alt="about-image">
                    
                        	
						</a>
						</br>
						<a href="lang/jp"><img src="assets/images/japanicon.png"/></a>
						<a href="<?php BASEPATH ?>"><img src="assets/images/ukicon.png"/></a>
                    </div> <!--/End Logo Area -->
                </div>
				 <div class="col-md-9 col-sm-9">
                    <div class="main-menu"> <!-- Start Menu Area -->
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                    	<a class="smoth-scroll" href="#home">Home</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#about">About</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#service">Service</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#portfolio">Pricing</a>
                                    </li>
                                    
                                    <li>
                                    	<a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
								
									
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div> <!--/End Menu Area -->
                </div>
			</div>
		</div>
	</header> <!--/End Header Area -->
	<!--==================================================================== 
							End	Header Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Slider Section 
	=====================================================================-->
	<section class="slider-area">
		<div class="camera_wrap main-slider">
            <div data-thumb="assets/images/banner.jpg" data-src="assets/images/banner.jpg">
                <div class="camera_caption text-center">
                	<h5 class="fadeInUp animated"><?=$co['name'];?></h5>
                    <h1 class="fadeInDown animated"><?=$co['short'];?> PC repair tool is an online computer repair service</h1>
					<a href="#about" class="btn1 fadeInLeft animated">About Us</a>
                    <a href="#contact" class="btn2 fadeInRight animated">contact us</a>
                </div>
            </div>
            <div data-thumb="assets/images/banner2.jpg" data-src="assets/images/banner2.jpg">
                <div class="camera_caption text-center">
                	<h5 class="fadeInUp animated">Remote Computer Repair</h5>
                    <h1 class="fadeInDown animated">on your finger tips</h1>
					<a href="#about" class="btn1 fadeInLeft animated">About Us</a>
                    <a href="#contact" class="btn2 fadeInRight animated">contact us</a>
                </div>
            </div>
            <div data-thumb="assets/images/banner3.jpg" data-src="assets/images/banner3.jpg">
                <div class="camera_caption text-center">
                	<h1 class="fadeInUp animated">Slow Computer? Popups? </h1>
                    <h5 class="fadeInDown animated">We will get it back to normal</h5>
					<a href="#about" class="btn1 fadeInLeft animated">About Us</a>
                    <a href="#contact" class="btn2 fadeInRight animated">contact us</a>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
	</section>
	<!--==================================================================== 
							End	Slider Section 
	=====================================================================-->
	<!--==================================================================== 
							Start About Section 
	=====================================================================-->
	<section class="about-area ptb-1" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="section-top text-center pb-1">
						<h2>about us</h2>
                        <p>What you need is someone who knows your computer and is there whenever the need arises.</p>
						
						<p>Congratulations! You have found that someone.</p>
					</div>
				</div>
			</div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-img">
                        <img src="assets/images/about.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
					<h3>About us</h3>
                    <p>Our team is a leader in providing top notch quality services and products with a focus on our customer’s needs. We are happy to discuss your computer issues and provide a free valuable diagnostic to determine the best solutions.</p>
					<p>While you are looking for the best source out there, we have everything for your computer and internet security!</p>
					<h3>Our mission</h3>
                     <p>We strive to provide quality service at affordable prices. Our mission is a simple one. We service all our clients’ computer needs with exceptional service. </p>
					 
					 <h3>Why choose us ?</h3>
                      <p>Our knowledgeable and service oriented staff are experienced in their field and they use their expertise to provide efficiency in all that they do. Our business is to help you get on with yours. We look forward to working with you soon!</p>
					  
                        
                    </div>
                </div>
            </div>
		</div>
	</section> <!--/section -->
	<!--==================================================================== 
							End	About Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Corporate Information Section 
	=====================================================================-->
	<section class="feature-area ptb-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>Notation Based on Specified Commercial Transaction Law</h2>
                        
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature-content">
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-dashcube"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Company Name</h3>
                                <p>Philtel Strategic Solutions, Inc.</p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Address</h3>
                                <p>〒271-0068 千葉県松戸市古ケ崎3-3289-1 イーグレットA-205</p>
                                <!-- <p>3-3289-1, Kogasaki, Matsudo, Chiba</p> --->
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-black-tie"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Representative</h3>
                                <p>Director : Ms. IMELDA ARAI</p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Phone</h3>
                                <p>047-727-5376</p>
                            </div>
                        </div><!-- /Single feature item -->
						 <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Contact Email</h3>
                                <p><?=$co['email'];?></p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-edge"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Company Website</h3>
                                <p>www.<?=$co['domain'];?></p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Price Range</h3>
                                <p>29,000~59,000 JPY</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-question"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>How long it takes our service to be offered?</h3>
                                <p>10 minutes after order is placed</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Payment Methods</h3>
                                <p>Credit Card Only</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Extra fees (e.g. tax)</h3>
                                <p>8% VAT</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Return/Refund Policy</h3>
                                <p>No Refund Accepted</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Policy for defective services</h3>
                                <p>NO REFUND ACCEPTED for defective services</p>
                            </div>
                        </div><!-- /Single feature item -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature-img">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1365.8003925296878!2d120.99653105786065!3d14.480849192298182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf0dd30a115b%3A0x79321e0391dfa00f!2sPhilTel+Strategic+Solutions+Inc.!5e0!3m2!1sen!2ssg!4v1531930025658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12944.27453810452!2d139.88636022838494!3d35.79824833267254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601885275cc0d435%3A0x45a42e75dacc7c25!2sKogasaki%2C+Matsudo%2C+Chiba+Prefecture+271-0068%2C+Japan!5e0!3m2!1sen!2ssg!4v1534226108771" width="600" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>     
        </div>
    </section>
	<!--==================================================================== 
							End	Corporate Information Section 
	=====================================================================-->
    
	<section class="feature-area ptb-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>Advantages of remote computer repair</h2>
                        
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature-content">
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <a href="#"><h3>We are always on hand</h3></a>
                                <p align="justify"><?=$co['name'];?> is the best way to get your computer the help it needs right away! No wasting gas taking your computer in to a repair facility and no time waiting for a technician to return your call or come to your home or office. We are available for you on your schedule whether it is morning, afternoon or middle of the night!</p>
								
                            </div>
                        </div><!-- /Single feature item -->
                        
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <p align="justify"><?=$co['name'];?> is also the best solution when it comes to protecting your private information. When your computer is left in a store you have no idea what is being looked at but with <?=$co['name'];?> we only see what you see while we repair your computer right before your eyes! </p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <p>This type of technology is fast becoming the preferred method of repair for home and business computer users for convenience and security.</p>
                            </div>
                        </div><!-- /Single feature item -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature-img">
                        <img src="assets/images/feature.jpg" alt="feature-image">
                    </div>
                </div>
            </div>     
        </div>
    </section>
	<!--==================================================================== 
							Start Service Section 
	=====================================================================-->
	<section class="service-area ptb-1" id="service">
		<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>our service</h2>
                        <p>When you need computer help online and can’t figure out the technical problem on your own, give us a call and we will fix your Windows PC problem remotely.</p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <h3>Virus - Malware Removal</h3>
                        <p>We remove ALL viruses like trojans, rootkits, browser hijacks, fake security </br> software, popups etc. to get your system back to the way it was.</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <h3>Blue Screen of Death (BSOD)</h3>
                        <p>Getting that dreaded Blue Screen of Death (BSOD)? We'll run our diagnostics, get to the root of the issue and repair it remotely.</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-hdd-o"></i>
                        </div>
                        <h3>Computer Optimization</h3>
                        <p>Computer running slow? Junk files, registry issues, unwanted files and more build over time. We'll optimize it for peak performance.</p>
                    </div>
                </div> <!--/End Sungle service item -->
			</div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-cube"></i>
                        </div>
                        <h3>Error Messages</h3>
                        <p>Software is not perfect, sometimes errors can come up due to corruptions. We can find the root cause of the errors and clean them up for you. This includes blue screens or random errors that come up while you are working on your computer.</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3>Slow Computer</h3>
                        <p>Taking forever to boot, open web pages, that dreaded spinning circle? We can help get your PC back running smooth now.</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-windows"></i>
                        </div>
                        <h3>Windows Repair</h3>
                        <p>Windows acting up? We have repaired thousands of Windows based computers and can fix yours too while you watch or just relax</p>
                    </div>
                </div> <!--/End Sungle service item -->
            
		</div>
	</section>
	<!--==================================================================== 
							End	Service Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Facts Section 
	=====================================================================-->
	<section class="facts-area ptb-1">
        <div class="overlay1"></div>
		<div class="container">
		 <div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="single-facts-item text-center">
					   <h6>We deliver amazing quality services with fast and accurate solutions. </h6>
						<h1>WORLDWIDE</h1>
						
					</div>
				</div>
			</div> <!--/End Section Top-->
			
			
		</div>
	</section>
	<!--==================================================================== 
							End	Facts Section 
	=====================================================================-->
	<!--==================================================================== 
							Start portfolio Section 
	=====================================================================-->
	<section class="portfolio-area ptb-1" id="portfolio">
		<div class="container">
			
			
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>our pricing</h2>
                        <p>With a number of affordable service plans, including one-time support and unlimited support memberships, everyone should be able to say "CompuLink Works!" Does Yours?</p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table text-center">
                        <div class="pricing-top">
                            <h4>Starter</h4>
                            <div class="pricing-cost">
                                <span>¥29,000<sub>6 MONS</sub></span>
                            </div>
                        </div><!--/End Price Top-->
                        <ul>
							<li>6 Months</li>
                            <li>Support up to 1 device</li>
							<li>Data backup</li>
							<li>Virus • Prevention of harmful software</li>
							<li>Regular adjustment and optimization</li>
							<li>Support by specialist staff (Monday - Friday)</li>
                            <li>PC Cleanup Tool</li>
							<li>Data recovery tool</li>
							<li>Plus 8% VAT</li>
							<li>No Refund Accepted</li>
                        </ul>
                        <a class="btn4" href="#contact">order now</a>
                    </div>
                </div> <!-- /End Single Pricing Table -->
                <div class="col-md-3 col-sm-6">
                    
                </div> <!-- /End Single Pricing Table -->
                <!-- /premium Start Single Pricing Table -->
				<div class="col-md-3 col-sm-6">
                    
                </div> <!-- /premium End Single Pricing Table -->
				<!-- /business Start Single Pricing Table -->
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table text-center">
                        <div class="pricing-top">
                            <h4>basic</h4>
                            <div class="pricing-cost">
                                <span>¥39,000<sub>/1 YEAR</sub></span>
                            </div>
                        </div><!--/End Price Top-->
                        <ul>
                            <li>1 YEAR</li>
                            <li>Support up to 1 device</li>
                            <li>Data backup</li>
                            <li>Virus • Prevention of harmful software</li>
                            <li>Regular adjustment and optimization</li>
							<li>Support by specialist staff (Monday - Friday)</li>
							<li>PC Cleanup Tool</li>
							<li>Data recovery tool</li>
							<li>Plus 8% VAT</li>
							<li>No Refund Accepted</li>
                        </ul>
                        <a class="btn4" href="#contact">order now</a>
                    </div>
                </div>  <!-- /business End Single Pricing Table -->
            
        </div>
			
		</div>
	</section>
	<!--==================================================================== 
							End	portfolio Section 
	=====================================================================-->
	<!-- ===================================================================
							Start Partner Section
	=====================================================================-->
	<div class="partner-area ptb-1">
		<div class="container">
				<div class="col-md-12">
					<div class="partner-slider">
						<div class="partner-item">
							<img src="assets/images/c1.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c2.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c3.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c4.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c5.png" alt="partner-logo">
						</div>
						
					</div>
				</div>
		</div>
	</div>
	<!-- ===================================================================
							End Partner Section
	=====================================================================-->
    <!--==================================================================== 
                              
    <!--==================================================================== 
                            Start Expertice Section 
    =====================================================================-->
    <section class="expertise-area ptb-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>Our Guarantee</h2>
                        <p><?=$co['name'];?> strives for world-class customer satisfaction by providing excellent technical support to businesses and general customers. Our goal is to assist our customers 24/7 and sticking to them with the best IT solutions. </p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            
        </div>
    </section>
    <!--==================================================================== 
                            End Expertice Section 
    =====================================================================-->
	
	<!--==================================================================== 
							Start Overview Section 
	=====================================================================-->
	
	<!--==================================================================== 
							End Overview Section 
	=====================================================================-->
	
    <!--====================================================================
                        Start Holder Section
    =====================================================================-->
    
    <!--====================================================================
                        End Holder Section
    =====================================================================-->
	
	<!-- ===================================================================
							Start Contact Section
	=====================================================================-->
	<section class="contact-area ptb-1" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="section-top text-center pb-1">
						<h2>contact us</h2>
                        <p>Contact us ANYTIME</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-sm-6 col-xs 12">
					<div class="contact-field-area">
						<form id="ajax-contact" action="mail.php" method="post">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="single-contact-field">
										<input type="text"  name="name" class="text-field" id="name" placeholder="Name" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="single-contact-field">
										<input type="email"  name="email" class="text-field" id="email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="single-contact-field">
										<input type="text"  name="subject" class="text-field" id="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="single-contact-field">
										<textarea name="msg" id="msg" placeholder="Message"></textarea>
									</div>
									<input type="submit" name="submit" value="send message" id="submitButton" class="btn3" data-text="Send Message">
								</div>
							</div>
							<div id="form-messages"></div>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="contact-info">
						<h3>If you got any question, please do not hesitate to send us a message. we reply within 24 hours</h3>
						<ul>
							<li>
								
								<div class="info-text">
									<strong>Adderss (Japan):</strong><br><?=$co['address1'];?> 
                                    <?=$co['address2'];?>
									<?=$co['city'];?>
									
									
								</div>
								
									
								
							</li>
							<li>
								
								<div class="info-text">
									<strong>Phone:</strong><br><?=$co['phone'];?>
                                    <?=$co['phone2'];?>
								</div>
							</li>
							
							<li>
								
								<div class="info-text">
									<strong>Email:</strong><br><?=$co['email'];?>
									</br><?=$co['email2'];?>
                                    <br>
								</div>
							</li>
						</ul>
						<ul>
							<li>
								
								<div class="info-text">
									<strong>Adderss (Philippines):</strong><br><?=$co['address3'];?> 
                                    <?=$co['address4'];?>
									<?=$co['city2'];?>
									
									
								</div>
								
									
								
							</li>
							<li>
								
								<div class="info-text">
									<strong>Phone:</strong><br><?=$co['phone3'];?>
                                    
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===================================================================
							End Contact Section
	=====================================================================-->
	<!--==================================================================== 
							Start Footer Section 
	=====================================================================-->
	<footer class="footer-area ptb-1 bg-2 text-center">	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="footer-logo">
									
                        <img src="assets/images/philtellogo.png" alt="about-image">
                    
					</div>
					<div class="ftr-social-link">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="copy-right">
						<p>Copyright &copy; by <?=$co['name'];?> 2019 | All Rights Reserved</p>
					</div> <!-- End Copyright Area -->
				</div>
			</div>
		</div>
	</footer>
	<!--=========== Scroll to top ===========-->
	<div class="scroll-top not-visible">
		<i class="fa fa-angle-double-up"></i>
	</div>
	<!--==================================================================== 
							End Footer Section 
	=====================================================================-->
	<!--====================================================================
							Include All Js File 
	 ====================================================================-->
     <!-- All Plugin -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoint.js"></script>
	<script src="assets/js/camera.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.min.js"></script>
	<script src="assets/js/contact-form.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <!-- Custom JS -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>