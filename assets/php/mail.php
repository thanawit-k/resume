<?php
$to = "tunnie0409.tk@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: kt.thanawit@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>