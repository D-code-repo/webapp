<!DOCTYPE html>
<html>
    <head>
        <title>DGJK | SignUp</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/> -->
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK</h1>
        </header>
        <!-- <section class="content-section container"> -->
            <div class="container">
                <div class="login-box">
                    <div class="row">
                        <div class="col-md-6 login-left">
                            <h2>SignUp</h2>
                            <form action="registration.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Signup</button>
                                </div>
                                <div class="form-group">
                                    <!-- <?php
                                    #print('$message');
                                    ?> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <footer class="main-footer">
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
        </footer> -->
    </body>
</html>