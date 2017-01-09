<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact.bordeaux@grand-gala.org";
    $to = "gg.bo@gadz.fr";
    $subject = "Test Formulaire de contact";
    $message = "Test";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>
