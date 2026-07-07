<?php
	if (empty($_POST['name_38368']) && strlen($_POST['name_38368']) == 0 || empty($_POST['email_38368']) && strlen($_POST['email_38368']) == 0 || empty($_POST['message_38368']) && strlen($_POST['message_38368']) == 0)
	{
		return false;
	}
	
	$name_38368 = $_POST['name_38368'];
	$email_38368 = $_POST['email_38368'];
	$message_38368 = $_POST['message_38368'];
	
	// Create Message	
	$to = 'vin@cotesdethoune.ch';
	$email_subject = "Message from cotesdethoune";
	$email_body = "New message from cotesdethoune \n\nName_38368: $name_38368 \nEmail_38368: $email_38368 \nMessage_38368: $message_38368 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: kontakt@cotesdethoune.ch\r\n";
	$headers .= "Reply-To: $email_38368";

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