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
                    <li class="active sub-menu"><a href="careers.php">Careers </a>
                      
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
            <li><a href="#">Careers</a> </li>
           
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
          <h2>Careers @ <?=$co['full'];?></h2>
        </div>
      </div>
    </div>
    <!--=========== Blog ===========-->
    <div class="row">
      <!-------------- Blog post -------------->
      <div class="span8">
        <!-- blog 1 -->
        <div class="post-border-right">
          <header>
            <h2>Outbound Sales Representatives</h2>
          </header>
            
            <p align="justify">Work directly with customers via telephone, and email to describe products and/or services in order to persuade potential and current customers to purchase new products and/or services. 
			</p>
        
          
            <h2>Inbound Sales Representatives</h2>
          
            
            <p align="justify"><?=$co['full'];?> is looking to recruit an Inbound Sales Representative to support and be part of our growing team of highly motivated people. As an Inbound Sales Representative you are responsible for the generation and development of inbound new business opportunities. At <?=$co['full'];?> you will get a taste of working in a fast-paced, innovative, exciting and successful startup with amazing colleagues.
			</p>
        </div>
        <!------------
        <form id="contact-form" class="contact-form">
          <div class="success">Contact form submitted!<strong><br>
            We will be in touch soon.</strong> </div>
          <fieldset class="thumbnails thumbnails_2">
          <label class="name span4">
          <input type="text" value="Name:">
          <span class="error">*This is not a valid name.</span> <span class="empty">**Please enter Name</span> </label>
          <label class="email span4">
          <input type="email" value="E-mail:">
          <span class="error">*This is not a valid email address.</span> <span class="empty">*Please enter Email</span> </label>
          <label class="message span8">
          <textarea class="message1">Message:</textarea>
          <span class="error">*The message is too short.</span> <span class="empty">*Please enter Some Text</span> </label>
          </fieldset>
          <div class="pull-right"> <a href="#" class="btn btn-warning" data-type="reset">Clear</a> <a href="#" class="btn btn-info" data-type="submit">Send Message</a> </div>
        </form> -------------->
      </div>
	  
      <!------------ Sidebar -------------->
      <div class="span4">
        <!-- Blog Categories -->
        <h2 class="indent-2">Requirements:</h2>
        <ul class="list">
          <li>At least 18 years of age.</li>
          <li>Effective verbal and written communication skills.</li>
          <li>Experienced with Web Based Applications and Windows.</li>
          <li>Strong work ethic and flexible approach</li>
          <li>Good organizational skills and the ability to multi-task and prioritize in a high-volume, fast paced environment.</li>
          
        </ul>
        <strong>*Please send your application to </strong> <a href="mailto:careers@<?=$co['domain'];?>" >careers@<?=$co['domain'];?>
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
