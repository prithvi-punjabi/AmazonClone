<?php
session_start();
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$_SESSION['user_email']=$email;
// sql to delete a record
$sql = "TRUNCATE table cart";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.open('cart.php' , '_self')</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
