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
                    <li class="active sub-menu"><a href="#">About Us</a>
                      <ul>
                        <li><a href="about.php">Who we are</a></li>
                        <li><a href="missvision.php">Mission and Vision</a></li>
                         
                        
                      </ul>
                    </li>
                    <li class="sub-menu"><a href="service.php">Our Services </a>
                      
                    </li>
                    <li class="sub-menu"><a href="careers.php">Careers </a>
                      
                    </li>
                    
                    <li><a href="contact.php">Contact us </a></li>
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
            <li><a href="#">About us</a> <span class="divider">/</span></li>
            <li class="active">Mission and Vision</li>
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
          <h2>We are experts in the telesales and telemarketing business.</h2>
        </div>
      </div>
    </div>
    <!-- rows -->
    <div class="row font-12">
      <!-- row 1 -->
      <div class="span6">
        <h2>Mission</h2>
		<p align="justify">Our mission is to see beyond and to seek out competitive advantage for our clients through 
		the innovative use of technology which eventually helps them to achieve long-term success and prosperity. 
		The face of technology has undergone a drastic makeover and, thereby, has become an indispensable part of 
		businesses around the world. Access to information has as well become a key ingredient for a successful 
		business venture. So, our priority centers on maximizing the business endeavors of our clients. 
		</p>
        
        </div>
      <!-- row 2 -->
      <div class="span6">
        <h2>Vision</h2>
        <p align="justify">Our vision for the future is to be the customer’s first and best choice in the services we provide. 
		   We will continue to be one of the leaders in the marketing industry and we will become a leader in 
		   the telemarketing services arena. Our customers needs will determine our path. Our values will guide us.
		</p>
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
