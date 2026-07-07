<?php
	if (empty($_POST['name_37530_30168_15250']) && strlen($_POST['name_37530_30168_15250']) == 0 || empty($_POST['email_37530_30168_15250']) && strlen($_POST['email_37530_30168_15250']) == 0 || empty($_POST['message_37530_30168_15250']) && strlen($_POST['message_37530_30168_15250']) == 0)
	{
		return false;
	}
	
	$name_37530_30168_15250 = $_POST['name_37530_30168_15250'];
	$email_37530_30168_15250 = $_POST['email_37530_30168_15250'];
	$message_37530_30168_15250 = $_POST['message_37530_30168_15250'];
	
	// Create Message	
	$to = 'wein@cotesdethoune.ch';
	$email_subject = "Message from cotesdethoune";
	$email_body = "New message from cotesdethoune \n\nName_37530_30168_15250: $name_37530_30168_15250 \nEmail_37530_30168_15250: $email_37530_30168_15250 \nMessage_37530_30168_15250: $message_37530_30168_15250 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: kontakt@cotesdethoune.ch\r\n";
	$headers .= "Reply-To: $email_37530_30168_15250";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>