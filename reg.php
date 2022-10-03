<?php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Unable to connect to database");

  $n  = $_POST['name'];
  $m = $_POST['no'];
  $e  = $_POST['email'];
  $p  = $_POST['pass'];

  $query    = "INSERT INTO user VALUES ('$n', '$m', '$e', '$p')";
  $result   = $conn->query($query);
  if ($result)
	  echo "<script>window.open('sigin.html' , '_self')</script>";
  else
	  die ("Insertion Failed");

  $result->close();
  $conn->close();
?>
