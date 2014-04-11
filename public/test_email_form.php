<?php

if (isset($_POST['from'])) {
	$from = $_POST["from"]; // sender
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	// message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
	// send mail
	mail("cameron@thenearsky.com",$subject,$message,"From: $from\n");
	echo "Thank you for sending us feedback";
}

?>

<html>
<head>
	<title>test email form</title>
</head>
<body>
	<form method='POST' action=''>
		<h3>Contact Us</h3>
		<label for='from'>
			From <input type='text' name='from' id='from' placeholder='Your Email Address'/>
		</label>
		<label for='subject'>
			Subject <input type='text' name='subject' id='subject' placeholder='Subject'/>
		</label>
		<label for='message'>
			Subject <textarea name='message' id='message' placeholder='Message'></textarea>
		</label>
		<button type='submit'>Send</button>
	</form>
</body>
</html>