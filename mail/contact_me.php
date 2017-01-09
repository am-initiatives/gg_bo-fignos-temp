<?php
// Check for empty fields
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
	
// Create the email and send the message

$from = "contact.bordeaux@grand-gala.org";
$to = 'gg.bo@gadz.fr';
$subject = "Website Contact Form:  $name";
$email_body = "Vous avez reçu un nouveau message venant du formulaire du site.\n\n"."Les détails sont:\n\nNom: $name\n\nEmail: $email_address\n\nTelephone: $phone\n\nMessage:\n$message";
$headers = "From:" . $from;	
mail($to,$subject,$email_body,$headers);
return true;			
?>
