///////////////////////////////////////////
//  Author : Manuel                      //
//  Created On : Fri Aug 09 2019         //
//  File : back.php                      //
///////////////////////////////////////////

<?php
$name = $_POST['name'];
$phone = $_POST('phone')
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phonenumber: $phone \n E-Mail: $email \n Website: $website \n Message: $message;
$mymail = "amanueldegen@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n
mail($mymail, $subject, $formcontent, $mailheader) or die("E-Mail couldn't be sent!");
echo "Thanks!";
?>