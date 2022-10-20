 <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>DGJK | Compare</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
        <style>
            td>img{
                width: 100%;
                height: 250px;
                object-fit: contain;
            }
        </style>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="#">COMPARE</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">DGJK</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Compare Products</h2>
            <div class="shop-items">
                <table>
                    <tr>
                        <th>Select Product</th>
                        <th width:"400px">
                            <select id="select1" onchange="item1(this.value)">
                                <option value="0">--- Select Anyone ---</option>
                            </select>
                        </th>
                        <th width:"400px">
                            <select id="select2" onchange="item2(this.value)">
                                <option value="0" >--- Select Anyone ---</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Product</th>
                        <td><img src="Images/blank.jpg" id="img1" alt=""></td>
                        <td><img src="Images/blank.jpg" id="img2" alt=""></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td id="price1"></td>
                        <td id="price2"></td>
                    </tr>
                </table>
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
<script src="data.js"></script>
<script>
    for(var i=1; i<product.length;i++){
        document.getElementById("select1").innerHTML +=`
        <option value="${i}">${product[i].title}</option>
        `;
        document.getElementById("select2").innerHTML +=`
        <option value="${i}">${product[i].title}</option>
        `;
    }

    function item1(a){
        // alert(a);
        var select2=document.getElementById("select2").value;
        if(a!=select2){
            document.getElementById("img1").src=product[a].image;
            document.getElementById("price1").innerHTML=product[a].price;
        } else {
            document.getElementById("select1").selectedIndex=0;
            document.getElementById("img1").src=product[0].image;
            document.getElementById("price1").innerHTML="";
        }
    }
    
    function item2(a){
        // alert(a);
        var select1=document.getElementById("select1").value;
        if(a!=select1){
            document.getElementById("img2").src=product[a].image;
            document.getElementById("price2").innerHTML=product[a].price;
        } else {
            document.getElementById("select2").selectedIndex=0;
            document.getElementById("img2").src=product[0].image;
            document.getElementById("price2").innerHTML="";
        }   
    }
</script>