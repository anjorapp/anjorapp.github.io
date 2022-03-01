<?php
define("BASEPATH", dirname(__FILE__));
$Appsetting= BASEPATH . DIRECTORY_SEPARATOR . "_sys". DIRECTORY_SEPARATOR ."init_var.php";
include $Appsetting;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$co['name'];?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/inner.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/elements.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>
<body>
<!--==============================header=================================-->
<div class="header-block clearfix">
  <!-- Navigation -->
  <header>
    <div class="container clearfix">
      <div class="row ">
        <div class="span12">
          <?php
			include 'tophead.php';
			?>
          <div class="clear"></div>
          <div class="row-nav-search">
           
            <div class="navbar navbar_">
              <div class="container">
                <!--=========== menu ===============-->
               <div class="nav-collapse nav-collapse_ collapse">
                  <ul class="nav sf-menu">
                    <li class="sub-menu"><a href="index.php">Home</a>
                      
                    </li>
                    <li class="sub-menu"><a href="#">About Us</a>
                      <ul>
                        <li><a href="about.php">Who we are</a></li>
                        <li><a href="missvision.php">Mission and Vision</a></li>
                         
                        
                      </ul>
                    </li>
                    <li class="sub-menu"><a href="service.php">Our Services </a>
                      
                    </li>
                    <li class="sub-menu"><a href="careers.php">Careers </a>
                      
                    </li>
                    
                    <li class="active sub-menu"><a href="contact.php">Contact us </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="span12">
        <div id="page-title">
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--==============================content=================================-->
<section id="content">
  <div class="container">
    <!-- welcome text -->
    <div class="row">
      <div class="span12">
        <div class="effect-left"></div>
        <div class="effect-right"></div>
        <div class="page-header1">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
    <!-- contact form & map -->
    <div class="row">
      <div class="span12">
        <div class="map">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7722.455976776777!2d121.05986927004759!3d14.586080691145655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!1i0!3e6!4m0!4m4!2sPrestige+Tower+Condo.+Unitowners+Association%2C+Inc.%2C+Pasig%2C+Metro+Manila%2C+Philippines!3m2!1d14.587848699999999!2d121.06173709999999!5e0!3m2!1sen!2sus!4v1412782643563"></iframe> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1365.8003925296878!2d120.99653105786065!3d14.480849192298182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf0dd30a115b%3A0x79321e0391dfa00f!2sPhilTel+Strategic+Solutions+Inc.!5e0!3m2!1sen!2ssg!4v1531930025658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
        </div>
      </div> 
      <div class="span3">
        <address>
        <h2 class="indent-3">Our Address</h2>
        <strong>Philippines: <?=$co['address1'];?></strong> 
		<strong>Japan: <?=$co['address2'];?></strong>
        
        </address>
		<strong> E-mail</strong>: <a href="mailto:<?=$co['email'];?>" class="email"><?=$co['email'];?></a>
      </div>
      <div class="span9">
	     * Please fill all required form field, <strong>we respect your privacy</strong>. Thanks!
        <form action="mail.php" id="contact-form" class="contact-form">
          <div class="success">Contact form submitted!<strong><br>
            We will be in touch soon.</strong> </div>
          <fieldset class="thumbnails thumbnails_2">
          <label class="name span3">
          <input type="text" value="Name:">
          <span class="error">*This is not a valid name.</span> <span class="empty">**Please enter Name</span> </label>
          <label class="email span3">
          <input type="email" value="E-mail:">
          <span class="error">*This is not a valid email address.</span> <span class="empty">*Please enter Email</span> </label>
          <label class="phone span3">
          <input type="text" value="Phone:">
          <span class="error">*This is not a valid phone number.</span> <span class="empty">*Please enter Phone</span> </label>
          <label class="message span9">
          <textarea class="message1">Message:</textarea>
          <span class="error">*The message is too short.</span> <span class="empty">*Please enter Some Text</span> </label>
          </fieldset>
		  
          <div class="pull-right"> <a href="#" class="btn btn-warning" data-type="reset">Clear</a> <a href="#" class="btn btn-info" data-type="submit">Submit</a> </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<?php

include 'footer.php';

?>
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/application.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/sitemap.js"></script>
<script type="text/javascript" src="js/nav-small.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
	</script>
</body>
</html>
