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
<link rel="stylesheet" href="css/es-carousel.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/elements.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700italic,600italic,400italic,300italic,800,700,600,300|Open+Sans+Condensed:300,700,300italic|Fredericka+the+Great' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>
<body class="home-page">
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
                    <li class="active sub-menu"><a href="index.php">Home</a>
                      
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
  <!-- Slider -->
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="slider">
          <div class="camera_wrap">
            <div data-src="img/slide-1.png">
              <div class="camera_caption fadeIn">
                <div>
                  <h1>Discover</h1>
                  <h2>the business secrets</h2>
                  <p align="justify">Excellent job results. As you would be outsourcing to the perfect company, 
				     you are assured of effective accomplishments of your required support processes, projects and tasks. After all, 
					 <?=$co['name'];?> has the experts and teams with verifiable experience at implementing the job professionally, 
					 ensuring the best quality at all times.  Budget-friendly </p>
                  <a href="about.php" class="btn-3 btn">start  today</a> </div>
              </div>
            </div>
            <div data-src="img/slide-2.png">
              <div class="camera_caption fadeIn">
                <div>
                  <h1>Extensive</h1>
                  <h2>Sales and Marketing</h2>
                  <p>The growing demand for affordable support services has crowded the industry with so many providers. </p>
                 </div>
              </div>
            </div>
            <div data-src="img/slide-3.png">
              <div class="camera_caption fadeIn">
                <div>
                  <h1>Powerful</h1>
                  <h2>and effective cooperation</h2>
                  <p>Catapult your business to new heights with a strategic alliance that will create value and unparalleled results. </p>
                   </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--==============================content=================================-->
<section id="content">
  <div class="container">
    <!-- Icons -->
    <div class="row">
      <ul class="thumbnails list-service">
        <li class="span3">
          <article class="thumbnail thumbnail-1"> <img alt="" src="img/page1-img1.png" >
            <div class="box-title maxheight">
              <h4>APPOINTMENT SETTING</h4>
              <p align="justify">The cornerstone of the services is our professional appointment setting, 
			     in which our experienced telesales executives schedule appointments for your sales team with interested prospects. 
			   </p>
              <a href="service.php" class="btn-3 btn">Read more</a> 
			  </div>
          </article>
        </li>
        <li class="span3">
          <article class="thumbnail thumbnail-1"> <img alt="" src="img/page1-img2.png" >
            <div class="box-title maxheight">
              <h4>TELESALES</h4>
              <p>Whether you are looking for qualified sales leads or direct sales over the phone through to order and dispatch, <?=$co['name'];?> will showcase its talent in this field.</p>
              <a href="service.php" class="btn-3 btn">Read more</a> </div>
          </article>
        </li>
        <li class="span3">
          <article class="thumbnail thumbnail-1"> <img alt="" src="img/page1-img3.png" >
            <div class="box-title maxheight">
              <h4>TELEMARKETING</h4>
              <p>Penetrate your target accounts and engage with key decision makers with high touch telemarketing.</p>
              <a href="service.php" class="btn-3 btn">Read more</a> </div>
          </article>
        </li>
        <li class="span3">
          <article class="thumbnail thumbnail-1"> <img alt="" src="img/page1-img4.png" >
            <div class="box-title maxheight">
              <h4>TECHNICAL HELPDESK</h4>
              <p>Our helpful staff are always available 24 hours to answer questions and provide quick and easy solutions to problems our clients may have. </p>
              <a href="service.php" class="btn-3 btn">Read more</a> </div>
          </article>
        </li>
      </ul>
    </div>
  </div>
  <div class="section-4 centre">
    <div class="container">
      <!-- Strip with button -->
      <div class="row">
        <div class="span12">
          <h2><?=$co['name'];?> are <span>committed</span> to <span>delivering excellence</span>.</h2>
          <p >We work as our clients' partner in growth and commit to provide the 4Cs of customer engagement: convenience, comfort, consistency and customized service.</p>
		  <p >We adhere to the management precept that a company can grow at a faster pace if it will be less constrained by large capital expenditures for people.</p>
        </div>
      </div>
    </div>
  </div>
   <div class="section-4">
    <div class="container">
      <!-- About -->
      <div class="row">
        <article class="span4">
          <h4 class="indent-1 extra">Business Objectives</h4>
          <div class="img-border"><img src="img/busskey.png" alt=""></div>
          <p class="p-full">We are delighted to get involved with so many diverse and interesting projects. We take great delight in proving that what looks so difficult to some, can in fact, be relatively straight forward.</p>
           </article>
        <article class="span4">
          <h4 class="indent-1 extra">Our Mission</h4>
          <div class="img-border"><img alt="" src="img/page1-img13.png"></div>
          <p class="p-full">Our mission is to see beyond and to seek out competitive advantage for our clients through the innovative use of technology which eventually helps them to achieve long-term success and prosperity.</p>
        </article>
        <article class="span4">
          <h4 class="indent-1 extra">Our Vision</h4>
          <div class="img-border"><img src="img/page1-img12.png" alt=""></div>
          <p class="p-full">Our vision for the future is to be the customer’s first and best choice in the services we provide. We will continue to be one of the leaders in the marketing industry and we will become a leader in the telemarketing services arena. Our customers needs will determine our path. Our values will guide us.</p>
          
      </div>
    </div>
  </div>
  
  <div class="container">
    
    <!-- latest posts -->
    
    <!-- latest posts -->
    <!-- client logo -->
   
	<!-- client logo -->
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
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
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
<script>
				jQuery("#carousel-blog").elastislide({
					imageW 		: 270,
					minItems		: 2,
					speed			: 600,
					easing		: "easeOutQuart",
					margin		: 30,
					border		: 0,
					onClick		: function() {}
				});</script>
</body>
</html>
