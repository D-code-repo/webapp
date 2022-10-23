 <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>DGJK | About</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="compare.php">COMPARE</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">About Us</h2>
            <div class="shop-items">
                <p>
                    DGJK digicom, the digital e-shop is a highly rated store for all digital products. 
                    It has associations with the leading brands of the digital world. 
                    DGJK digicom brings customers the latest technology products and fully meeting customer 
                    expectations and aspirations. 
                </p>
                <p>
                    The name DGJK is the acronym of the names of 6 techies who share the passion for the digital world, 
                    joined hands to build this from the scratch to bring this e-commerce website from where customers could see, 
                    enquire about and shop their favourite products without leaving the safety of their homes. 
                    The logo which has the infinite symbol is a mark of the infinite possibilities of new products and growth 
                    of the company and its trusted customers.
                </p>
                <p>
                    DGJK digicom always places ‘Customer First’ and continue to introduce customer-friendly schemes and initiatives 
                    to make digital products more accessible to all. At the same time, it has brought about a distinctive difference 
                    for itself by embracing quality, innovation and simplicity in browsing the products on their e-store. 
                </p>
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