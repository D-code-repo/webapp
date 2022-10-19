<?php
// $message = "";
#require ('../model/db.php');
//session_start();
//include ('../controller/auth.php');
$con=mysqli_connect('localhost','root','','webapp');

if (isset($_POST['username'])) {
    $username = stripcslashes($_REQUEST['username']);
    $username = mysqli_escape_string($con, $username);
    $password = stripcslashes($_REQUEST['password']);
    $password = mysqli_escape_string($con, $password);


    //Checking is user existing in the database or not
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    $row1 = mysqli_fetch_array($result);
    // echo $rows;
    if ($row1 == 1) {
        header("Location: store.php");
        // $_SESSION['username'] = $username;
    } else {
        header("Location: login.php");
        // $message = " Username / Password is Incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Generics</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/> -->
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK Digicom</h1>
        </header>
        <!-- <section class="content-section container"> -->
            <div class="container">
                <div class="login-box">
                    <div class="row">
                        <div class="col-md-6 login-left">
                            <h2>Login</h2>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">DGJK Digicom</h3>
                <ul class="nav footer-nav">
                    <li>
                        
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>