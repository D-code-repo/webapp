 <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>DGJK | Payment</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/> -->
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="compare.php">COMPARE</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK</h1>
            
        </header>
        <section class="content-section container">
            <div class="container">
                <div class="login-box">
                    <div class="row">
                        <div class="col-md-6 login-left">
                            <h2 class="section-header">Payment</h2>
                            <form action="payment.php">
                                <div>
                                    <div>
                                        <input value="cards" type="radio" name="payment" id="payment1" checked/>
                                        <label for="payment1">Credit / Debit Card</label>
                                    </div>
                                    <div>
                                        <input  value="netbanking" type="radio" name="payment" id="payment2"/>
                                        <label  for="payment2">NetBanking</label>
                                    </div>
                                    <div>
                                        <input value="upi" type="radio" name="payment" id="payment3"/>
                                        <label for="payment3">UPI</label>
                                    </div>
                                    <div>
                                        <input value="cod" type="radio" name="payment" id="payment4"/>
                                        <label for="payment4">Cash on Delivery</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-purchase">PURCHASE</button>
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