<?php
    //we need to get our variables first
    
    $email   	 =   $_POST['email'];
	$email_to 	 =   $email; //the address to which the email will be sent
    $fromname    =   "Philtel Strategic Solutions Inc.";
	$fromemail   =   "info@philtelstrategicsolutionsinc.com";
    
    $message  =  "You have successfully subscribed!!<br/><br/>For any issue please contact us at info@philtelstrategicsolutionsinc.com<br/><br/>";
	$message  =  "<a href=\"www.philtelstrategicsolutionsinc.com">Click here</a> <br/><br/>";
	
	$subject  =  "Successfully Subscribed!!";
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know
     who are we replying to. */
	 
	 // Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	 
    $headers .= "From: $fromname <$fromemail>" . "\r\n";
    $headers .= "Reply-To: $fromemail\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>