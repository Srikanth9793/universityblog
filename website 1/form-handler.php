<?php
$name=$_POST['name'];
$Visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$email_form="info@yourwebsite.com";

$email_subject='New For Submisiion'

$email_body="User Name:$name.\n".
    "User Email:$Visitor_email.\n".
     "Subject:$Subject.\n".
      "User Message:$message.\n";


$to='srikanthgoud9793@gmail.com';

$header ="From: $email_form \r\n";

$headers.="Reply-To:$Visitor_email\r\n";

mail($to,$email_subject,$headers);
header("Location Contact.html");


?>