<?php
// Contact subject
$subject ="$subject"; 
// Details
$message="$detail";

// Mail of sender
$mail_from="$user_mail"; 
// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='jchavez2017@gmail.com';

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
$url = 'http://www.mrdunston.com/web/jonathan/secondcontacts.html';
header('Location: ' . $url);
}
else {
echo "ERROR";
}
?>