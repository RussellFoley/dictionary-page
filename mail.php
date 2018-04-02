<?php
if (isset($_POST['email']))
{
	$to = "russell.foley@hotmail.co.uk";
	$subject = "New message from geiriadurgwyddeleg.com";

	function died($error)
	{
		echo "Errors found:<br /><br />";
		echo $error;
		die();
	}

	//check all inputs have been filled
	if (!isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['email']) || !isset($_POST['message']) || !isset($_POST['human']))
	{
		died("Please complete all fields.");
	}

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email_from = $_POST['email'];
	$message = $_POST['message'];
	$human = $_POST['human'];

	$error_message = "";
	$email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";

	if(!preg_match($email_exp,$email_from))
	{
		$error_message .= "Invalid email address.<br />";
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp, $first_name))
	{
		$error_message .= "Invalid first name.<br />";
	}

	if(!preg_match($string_exp, $last_name
	))
	{
		$error_message .= "Invalid last name.<br />";
	}

	if(strlen($message) < 2) {
		$error_message .= "Message is too short.<br />";
	}

	if(strlen($error_message) > 0)
	{
		died($error_message);
	}

	$email_message = "Form details below. \n\n";

	function clean_string($string)
	{
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .= "First name: " . clean_string($first_name) . "\n";
	$email_message .= "Last name: " . clean_string($last_name) . "\n";
	$email_message .= "E-mail: " . clean_string($email_from) . "\n";
	$message = wordwrap($message, 70, "\r\n");
	$email_message .= "Message: " . clean_string($message) . "\n";

//Headers
	$headers = array(
		"From" => "contact@geiriadurgwyddeleg.com",
		"Reply-To" => $email_from,
		"X-Mailer" => "PHP/" .phpversion()
	);


	echo $email_message;
	//mail($to,$subject,$message,$headers);
}