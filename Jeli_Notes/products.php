<?php

    session_start();
    
    if(!isset($_SESSION['usuario'])){
        echo'
           <script>
               alert("Please login");
               window.location = "/index.php";
           </script>
        ';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeli Notes</title>
    <link rel="stylesheet" href="./style-startsss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Jeli Notes</header>
        <ul>
            <li><a href="./products.php"><i class="fas fa-qrcode"></i>Products</a></li>
            <li><a href="./sell.php"><i class="fas fa-sliders-h"></i>Sell Product</a></li>
        </ul>
    </div>
    <section> 
        <h2 class="section-title">Products</h2>
        <div class="shop-content">
            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>

            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>

            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>

            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>
            
            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>
            
            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>
            
            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>
            
            <div class="product-box">
                <img src="not.png" alt="" class="product-img">
                <h2 class="product-title">--Notes--</h2>
                <span class="price">0.05€</span>
            </div>
        </div>
    </section>
</body>
</html>