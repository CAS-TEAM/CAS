<?php

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$to      = 'sharvai.p@somaiya.edu';
$subject = 'Feedback from '.$name;
$msg = 'From - '.$name.'('.$email.') Message - '.$message;
$headers = 'From: sharvai@gmail.com' . "\r\n" .
    'Reply-To: sharvai101@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $msg, $headers);