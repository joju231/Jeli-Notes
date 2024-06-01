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
    <link rel="stylesheet" href="styles.css">
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
<div class="wrapper active-popup">

        <div class="form-box sell">
            <h2>Sell your Product</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="Description" required name="password">
                    <label>Write a description</label>
                </div>
                <button type="submit" class="btn">Send</button>
                </div>
            </form>
        </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>