<?php
#$message="";
session_start();

$con=mysqli_connect('localhost','root','','webapp');

$username = stripcslashes($_REQUEST['username']);
$username = mysqli_escape_string($con, $username);
$password = stripcslashes($_REQUEST['password']);
$password = mysqli_escape_string($con, $password);


//Checking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result);
//$row1 = mysqli_fetch_array($result);

if ($rows == 1) {
    header("Location: signup.php");
} else {
    $reg="INSERT INTO `users` VALUES('$username','$password')";
    mysqli_query($con, $reg);
    header("Location: login.php");
}
?>