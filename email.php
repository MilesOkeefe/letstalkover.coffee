<?php
$_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$_time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);

if($_email && $_time){
	$to      = 'miles.okeefe@gmail.com';
	$short_email = explode("@", $_email)[0];
	$subject = $short_email. ' - ' . $_time;
	$message = $_email . ' wants to get coffee at ' . $_time;
	$headers = 'From: ☕ <new@letstalkover.coffee>' . "\r\n" .
	    'Reply-To: ' . $_email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

?> 