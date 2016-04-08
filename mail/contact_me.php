<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
$to = 'twoj-email';
$email_subject = "Wiadomość wysłana ze strony:  $name";
$email_body = "Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

$headers = "From: noreply@twoja-domena.pl\n";
$headers .= "Reply-To: $email_address";	

mail($to,$email_subject,$email_body,$headers);
return true;			
?>
