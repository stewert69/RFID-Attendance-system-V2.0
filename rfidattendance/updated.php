<?php

require 'connectDB.php';
$myTable = "admin";
$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$email = $_POST['email'];



$sql = "UPDATE $myTable 
	    SET admin_pwd ='$pwd'
		WHERE admin_email ='$email'";

if ($conn->query($sql) == TRUE) {
    $text = "Password has been changed.";
    pop_up($text);
} else {
    echo "Error updating record: " . $conn->error;
    $text = "Something Went Wrong.";
    pop_up($text);
}

$conn->close();


function pop_up($text) {
echo "<script>alert('";
echo $text;
echo "');</script>";
login();
}

function login() {
echo "<script>window.location.href = 'index.php';</script>";
}

?>

