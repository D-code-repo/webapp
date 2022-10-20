<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DGJK | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="#">STORE</a></li>
                    <li><a href="compare.php">COMPARE</a></li>
                    <li><a href="about.php">ADOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK Digicom</h1>
        </header>
        <div class="col1">
            <div class="scroll">
                <section class="container content-section">
                    <h2 class="section-header">MOBILES</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung M33</span>
                            <img class="shop-item-image" src="Images/samsung_galaxy_m33.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹23000.00</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Xiomi 11</span>
                            <img class="shop-item-image" src="Images/xiomi_11.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹22000</span>
                                <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung M32</span>
                            <img class="shop-item-image" src="Images/samsung_galaxy_m32.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹21000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Xiomi 10</span>
                            <img class="shop-item-image" src="Images/xiomi_10.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹20000.00</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">REFRIGERATOR</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung 1D</span>
                            <img class="shop-item-image" src="images/samsung_ref_singleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹20000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 1D</span>
                            <img class="shop-item-image" src="images/lg_singleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹19000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">TELEVISION</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung 32</span>
                            <img class="shop-item-image" src="images/samsung_tv_32.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹25000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 32</span>
                            <img class="shop-item-image" src="images/lg_tv_32.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹24000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>    
        </div>
        <div class="col2">
            <section class="container content-section">
                <h2 class="section-header">CART</h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items">
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">₹0</span>
                </div>
                <a href="payment.php"><button class="btn btn-primary" type="button">PURCHASE</button></a>
            </section>
        </div>
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