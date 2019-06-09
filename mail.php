<?php

$emailTo = "nmn.shah@gmail.com"; //Put your own email address here
		//sanjay.dash@7islandsindia.com
		
		//$body = "Name:" .$name. "\n\nEmail:" .$email. "\n\nSubject:" .$subject. " \n\nComments:\n" .$comments;
		//$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, "subject", "body");

?>