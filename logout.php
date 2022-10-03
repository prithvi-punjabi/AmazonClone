<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
session_destroy();

echo "<script>window.open('sigin.html' , '_self')</script>";
exit;
?>
