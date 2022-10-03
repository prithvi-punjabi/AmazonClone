<?php
	session_start();
	require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die("Unable to connect to database");
	$email=$conn->real_escape_string($_POST['email']);		
	$query = "SELECT user_email FROM user WHERE user_email='$email'";
	$result   = $conn->query($query);	
	$rows = $result->num_rows;
	if($rows==1)
		{
			$_SESSION['user_email']=$email;
			echo "<script>window.open('pass.html' , '_self')</script>";
		}
	else
		echo"false";
?>