<?php
$to = "+17086918339@tmomail.net";
$subject = "First text";
$txt = "Hello world!";
$headers = "From: russconte@mac.com" . "\r\n" .
    mail($to, $subject, $txt, $headers);