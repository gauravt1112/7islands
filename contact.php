<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = "mesumanprajapati15@gmail.com"; //Put your own email address here
		$email= "mesumanprajapati15@gmail.com"; 
		$body = "Name:" .$name. "\n\nEmail:" .$email. "\n\nSubject:" .$subject. " \n\nComments:\n" .$comments;
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
		
		
	}
}
?>
<?php if(isset($hasError)) { //If errors are found ?>
			 <script>alert('Please check if you filled all the fields with valid information and try again. Thank you.');</script>
			 header("location:javascript://history.go(-1)");
		<?php } ?>
		<?php 	if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<script>alert('Email Successfully Sent!!');</script>
			header("location:javascript://history.go(-1)");
		<?php } ?>


		