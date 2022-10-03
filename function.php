<?php

	require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die("Unable to connect to database");
function insert()
{
	if(isset($_POST['cart']))
	{
		global $conn;
		global $user;
		$query = "INSERT INTO cart VALUES('$user','$image','$name','$price')";
		$result   = $conn->query($query);
	}
}

?>
