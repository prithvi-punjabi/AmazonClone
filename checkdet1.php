<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "priyanka_project";
$n  = $_POST['firstname'];
$e = $_POST['email'];
$a  = $_POST['address'];
$c  = $_POST['city'];
$s = $_POST['state'];
$z = $_POST['zip'];
$cn = $_POST['cardname'];
$cno = $_POST['cardnumber'];
$em = $_POST['expmonth'];
$ey = $_POST['expyear'];
$cvv = $_POST['cvv'];

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO checkout (name, email, address, city, state, zip, noc, cc_no, exp_month, exp_year, cvv)
    VALUES ('$n', '$e', '$a', '$c','$s','$z','$cn','$cno','$em','$ey','$cvv')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script>window.open('thanks.php' , '_self')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
