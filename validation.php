<?php
$message="";
session_start();

$con=mysqli_connect('localhost','root','','webapp');
// mysqli_select_db($con, 'webapp');

// $name=$_POST['username'];
// $pass=$_POST['password'];

// $s = "select * from users where username='$name' and password='$pass'";

// $result = mysqli_query($con, $s);

// $num = mysqli_num_rows($result);

// if ($num  == 1){
//     header('loaction:login.php');
// }else{
//     header('loaction:store.php');
// }
if (isset($_POST['username'])) {
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
        $_SESSION['username'] = $username;
        header("Location: store.php");
    } else {
        
        header("Location: login.php");
        $message = " Username / Password is Incorrect";
    }
}
?>