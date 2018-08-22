<?php

//Taking all values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$phone 		= $_POST['phone'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nMessage: ".$msg;

$to 		= 'contact@crealphallc.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $name, $output."\n\n***This message has been sent from Crealpha", $headers);
<<<<<<< HEAD
?>
=======
?>
>>>>>>> d6c69c7a09b1582e65a0bbd2a7fd3a236998e1e2
