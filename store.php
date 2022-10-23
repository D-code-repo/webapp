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
            <h1 class="band-name band-name-large">DGJK</h1>
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
                            <img class="shop-item-image" src="Images/samsung_ref_singleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹20000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 1D</span>
                            <img class="shop-item-image" src="Images/lg_singleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹19000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung 2D</span>
                            <img class="shop-item-image" src="Images/samsung_ref_doubleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹25000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 2D</span>
                            <img class="shop-item-image" src="Images/lg_doubleD.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹27000</span>
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
                            <img class="shop-item-image" src="Images/samsung_tv_32.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹25000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 32</span>
                            <img class="shop-item-image" src="Images/lg_tv_32.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹24000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung 43</span>
                            <img class="shop-item-image" src="Images/samsung_tv_43.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹35000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">LG 43</span>
                            <img class="shop-item-image" src="Images/lg_tv_43.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹36000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">AIR CONDITOINERS</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Panasonic 1Ton</span>
                            <img class="shop-item-image" src="Images/panasonic_1Ton.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹44000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Panasonic 2Ton</span>
                            <img class="shop-item-image" src="Images/panasonic_2Ton.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹49000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Godrej 1.5Ton</span>
                            <img class="shop-item-image" src="Images/godrej_1.5Ton.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹32000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Godrej 1.5Ton</span>
                            <img class="shop-item-image" src="Images/godrej_1.5Ton.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹38000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">CAMERA</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Sony Cybershot</span>
                            <img class="shop-item-image" src="Images/sony_cyber.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹16000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Sony Digi</span>
                            <img class="shop-item-image" src="Images/sony_digi.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹25000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Nikon</span>
                            <img class="shop-item-image" src="Images/nikon.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹35000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Canon</span>
                            <img class="shop-item-image" src="Images/canon_Eos.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹40000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">LAPTOP</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Dell Inspiron15</span>
                            <img class="shop-item-image" src="Images/dell_inspiron_15.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹40000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Dell Latitude</span>
                            <img class="shop-item-image" src="Images/dell_latitude.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹65000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Asus Note</span>
                            <img class="shop-item-image" src="Images/asus_ryzen.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹33000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Asus Zenbook</span>
                            <img class="shop-item-image" src="Images/asus_zenbook.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹80000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container content-section">
                    <h2 class="section-header">WASHING MACHINE</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">LG Frontload 9Kg</span>
                            <img class="shop-item-image" src="Images/lg_9_front.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹40000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung Frontload 8Kg</span>
                            <img class="shop-item-image" src="Images/samsung_8_front.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹37000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">IFB Frontload 8Kg</span>
                            <img class="shop-item-image" src="Images/ifb_8_front.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹45000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Samsung Topload 8Kg</span>
                            <img class="shop-item-image" src="Images/samsung_8_top.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹20000</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">IFB Topload 9.5Kg</span>
                            <img class="shop-item-image" src="Images/ifb_9.5_top.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">₹30000</span>
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