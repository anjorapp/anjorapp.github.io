<footer>
  <div class="section-3">
    <div class="container">
      <div class="row">
        <!-- Contact us -->
        <div class="span3">
          <h2>Philippines</h2>
          <address class="vcard">
          <span class="street-address"><?=$co['address1'];?></span> <span class="tel"><?=$co['phonep'];?></span> <a href="mailto:<?=$co['email'];?>" class="email"><?=$co['email'];?></a>
          </address>
        </div>
		<div class="span3">
          <h2>Japan</h2>
          <address class="vcard">
          <span class="street-address"><?=$co['address2'];?></span> 
		  <span class="tel"><?=$co['phonej'];?></span> 
		  
          <span class="tel"><?=$co['phonej2'];?></span>
		  <a href="mailto:<?=$co['email2'];?>" class="email"><?=$co['email2'];?></a>  
		  </address>
        </div>
        <!-- Follow us -->
		
        <div class="span3">
		<h2>Affiliated Partners</h2>
		<div class="email">  <a  target="_blank" href="http://compulink.support/">Compulink Support</a></div>
          <h2>Follow Us</h2>
          
          <ul id="social" class="tooltip-demo">
            <li><a target="_blank" href="https://www.linkedin.com/in/philtel-startegic-sol-29712a169/" title="LinkedIn" rel="tooltip"><img src="img/social_icons/linkedin.png" alt="LinkedIn"></a></li>            
            <li><a rel="tooltip" title="Twitter" target="_blank" href="https://twitter.com/Philtelstategi1"><img alt="Twitter" src="img/social_icons/twitter.png"></a></li>
            <li><a rel="tooltip" title="Facebook" target="_blank" href="https://www.facebook.com/PhilTel-Strategic-Solutions-Incorporated-706442999565902/"><img alt="Facebook" src="img/social_icons/facebook.png"></a></li>
            <li><a rel="tooltip" title="Google+" target="_blank" href="https://plus.google.com/u/0/109048570179899373242"><img alt="Google" src="img/social_icons/googleplus.png"></a></li>
                      
          </ul>
		 
        </div>
        <!-- Useful Links -->
        
        <!-- twitter feed  -->
        
      </div>
    </div>
  </div>
  <!-- footer 2 -->
  <div class="footer-2">
    <div class="container">
      <div class="row">
        <div class="span12"><?=$co['name'];?>  Copyright &copy; <?=date('Y')?> <a href="cookie_privacy.php">Privacy Cookies Policy </a></div>
      </div>
    </div>
  </div>
</footer>