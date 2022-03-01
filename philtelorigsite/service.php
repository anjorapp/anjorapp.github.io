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
                    <li class="active sub-menu"><a href="service.php">Our Services </a>
                      
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
            <li><a href="#">Our Services</a> </li>
            
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
          <h2>Experience tells us that no single marketing initiative can do the whole job. </h2>
        </div>
      </div>
    </div>
    <!-- row 1 -->
    <div class="row">
      <!-------------- row 1 -------------->
      <div class="span12">
        <ul class="thumbnails thumbnails_2">
          <li class="span4">
            <div class="thumbnail_2"> <img alt="" src="img/appointsettings.png">
              <div>
                <h2>Appointment Setting</h2>
                <p align="justify">The cornerstone of the services is our professional appointment setting, 
				in which our experienced telesales executives schedule appointments for your sales team with 
				interested prospects.  </br>Additionally, our proprietary technology allows us to set appointments 
				directly on each sales person’s calendar in real-time, and even schedule around preset appointments or meetings. </p>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail_2"> <img src="img/icon2.png" alt="">
              <div>
                <h2>Telesales/Telemarketing</h2>
                <p class="">Whether you are looking for qualified sales leads or direct sales 
				   over the phone through to order and dispatch, <?=$co['name'];?> will showcase its talent in this field.
				   </br> 
					Leave the hard work safe in our hands – we will ensure we become a seamless extension of your 
					company and maintain a pipeline of hot new business opportunities for you.
					</br>
					Don't miss valuable sales opportunities in the market – contact <?=$co['name'];?> 
					today and let us help our business move forward.
				</p>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail_2"> <img alt="" src="img/virtualasst.png">
              <div>
                <h2>Technical Support</h2>
                <p align="justify">Businesses understand how important it is to address customer concerns quickly. Today, an increasing number of Independent Software Vendors (ISVs) and manufacturers are outsourcing remote support services to skilled partners. An expert like <?=$co['name'];?> not only troubleshoots problems through remote assistance, it also helps generate leads and can help you cross-sell products and services.</p>
              </div>
            </div>
          </li>
         
        </ul>
        
      </div>
    </div>
  </div>
  <div class="section-4 centre">
    <div class="container">
      <!-- Strip with button -->
      <div class="row">
        <div class="span12">
		<blockquote class="black">
		  <p>Experience tells us that no single marketing initiative can do the whole job. </p>
          <p>Whether you are a medium-sized or large business, we advocate a holistic approach with a suite of options 
		  most appropriate to your needs.</p>
          <p>To find out in detail what benefits our total telemarketing approach can bring to your business, 
		  please select one of the following services. </p>
          </blockquote>
		  <a href="contact.php" class="btn btn-large btn-info"><i class="icon-star icon-white"></i> Lets work together!</a> </div>
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
