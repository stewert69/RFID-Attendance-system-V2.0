<?php
sendmail();

function sendmail() {
// specify recipient email address 
$to = $_POST['email']; 
$from = "stewert@gmail.com";
$subject = "Admin Password Reset";
$message = "<br>Visit this website to change your password. <br>";
$message .= "<br>";
$message .= "https://computers-by-bob.com/rfid/resetpwd.php?email=". $to . "<br>";
$headers = "From: $from\r\nReply-to: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (mail ("$to","$subject","$message","$headers")) {
$email = $_POST['email']; 
$text = "An email has been sent to " . $email;
pop_up($text);            // Show message
login(); 	// redirect to page index.php
}else{
$text = "There was an error sending the email";
pop_up($text);            // Show Error
}
}

function pop_up($text) {
echo "<script>alert('";
echo $text;
echo "');</script>";
}

function login() {
echo "<script>window.location.href = 'index.php';</script>";
}


?>
