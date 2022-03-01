<?php
    //we need to get our variables first
    
    $name   	 =   $_POST['name'];
	$email   	 =   $_POST['useremail'];
	$messages  	 =   $_POST['usermessage'];
	
	$email_to 	 =   "info@philtelstrategicsolutionsinc.com"; //the address to which the email will be sent
    $fromname    =   $name;
	$fromemail   =   $email;
    
    $message  =  $messages;
	
	$subject  =  $fromname." Sent Query From Philtel Strategic Solutions Inc. Coming Soon page!!";
    
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
		mail($fromemail, $subject, $message, $headers);
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>