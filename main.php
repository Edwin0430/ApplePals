<?php
   session_start();
   $conn = mysqli_connect('localhost','root','','applepals');

require_once('component.php');
require_once('getDb.php');

$database=new CreateDb(dbname:"applepals",tablename:"products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApplePals - Home</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>

    <section id="header">
        <a href="main.php"><img src="images\logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="nav">
                <li><a href="login.php">&#128100; Login</a></li>
                <li><a class="active" href="main.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">&#128722;</a></li>
                <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" >$count</span>";
                        }else{
                            echo "<span id=\"cart_count\"> 0 </span>";
                        }

                ?>
                
            
            </ul>
        </div>
    </section>

    <section id="banner">
            <h2>Looking for second hand Apple products?</h2>
            <h1>You are in the right place!</h1>
            <p>Click the button below to find the products you want!</p>
            <a href="product.php">Shop Now</a>
    </section>


    <section id="fe-product" class="section-p1">
        <h2>Featured Products</h2>
        <p>Latest Models</p>
        <div class="container">
            <div class="product">
                <img src="images\fe product 1.webp" alt="fe-product 1">
                <div class="description">
                    <h5>AirPods Pro</h5>
                    
                    <h4>RM 950</h4>
                </div>
                </div>
            <div class="product">
                <img src="images\fe product 2.webp" alt="fe-product 2">
                <div class="description">
                    <h5>Apple Watch Series 5</h5>
                    
                    <h4>RM 2870</h4>
                </div>
                </div>
            <div class="product">
                <img src="images\fe product 3.webp" alt="fe-product 3">
                <div class="description">
                    <h5>Macbook Air</h5>
                   
                    <h4>RM 4950</h4>
                </div>
                </div>
            <div class="product">
                <img src="images\fe product 4.webp" alt="fe-product 4">
                <div class="description">
                    <h5>iPad (9th Gen)</h5>
                   
                    <h4>RM 1299</h4>
                </div>
                </div>
            
        </div>
   
    </section>

    <section id="banner1" class="section-m1">
        <h2>Sell your used Apple products!</h2>
        <button onclick="window.location.href='about.php'"; class="normal">Learn More</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="box">
            <img src="images/box 1.png" alt="box 1">
            <h6>Fast Shipping</h6>
        </div>
         <div class="box">
            <img src="images/box 2.png" alt="box 2">
            <h6>Reasonable Price</h6>
        </div>
         <div class="box">
            <img src="images/box 3.png" alt="box 3">
            <h6>Trustable</h6>
        </div>
         <div class="box">
            <img src="images/box 4.png" alt="box 4">
            <h6>Good Service</h6>
        </div>
    </section>


<!----footer---->
<footer class="footer">
		<div class="footer-container">
			<div class="footer-row">
				<div class="footer-col">
					<h4>Apple Pals</h4>
					<ul>
						<li><a href="main.php">About us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Product Info</h4>
					<ul>
						<li><a href="iphones.php">Iphones</a></li>
						<li><a href="ipad.php">Ipads</a></li>
						<li><a href="mac.php">Mac</a></li>
						<li><a href="applewatch.php">Apple Watch</a></li>
						<li><a href="accessories.php">Accessories</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>shop with us</h4>
					<ul>
						<li><a href="product.php">products</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>contact us</h4>
					<div class="social links"> 
					<a href="https://wa.me/60173511066"><img src= "images/whatsapp.png" alt=""></a>
					<a href="https://msng.link/o/?rachel11066=tg"><img src= "images/telegram.png" alt=""></a>
					<a href="https://www.facebook.com/rachel.baymax"><img src= "images/facebook.png" alt=""></a>
					<a href="https://www.instagram.com/rachelllfoo/"><img src= "images/insta.png" alt=""></a>
					</div>
				</div>	
			</div>
		</div>
    </footer>

</html>