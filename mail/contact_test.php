<?php
// Check for empty fields

$name = "A'3";
$email_address = "a3@gadz.org";
$phone = "0608324142";
$message = "Test";
	
// Create the email and send the message

$from = "contact.bordeaux@grand-gala.org";
$to = "gg.bo@gadz.fr";
$subject = "Website Contact Form:  $name";
$email_body = "Vous avez reçu un nouveau message venant du formulaire du site.\n\n"."Les détails sont:\n\nNom: $name\n\nEmail: $email_address\n\nTelephone: $phone\n\nMessage:\n$message";
$headers = "From:" . $from;	
mail($to,$subject,$email_body,$headers);
return true;			
?>
