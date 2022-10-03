<?php
	session_start();
	require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die("Unable to connect to database");
	$email = $_SESSION['user_email'];
	$pass=$conn->real_escape_string($_POST['user_pass']);
	$query = "SELECT pass FROM Registration WHERE user='$email' and pass='$pass'";
	$result   = $conn->query($query);
	$rows = $result->num_rows;
	if($rows==1)
		{
			$_SESSION['user_pass']=$pass;
			echo "<script>window.open('index.php' , '_self')</script>";
		}
	else
		echo "<script>window.open('wpass.html' , '_self')</script>";
?>
