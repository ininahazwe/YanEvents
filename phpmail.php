<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact@yanevents.com";
    $to = "ininahazwe@yahoo.fr";
    $subject = "Message pour tester le fonctionnement de la messagerie";
    $message = "Ceci est un message pour tester le fonctionnement de la messagerie";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Le mail a été envoyé";
?>
