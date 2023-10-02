<?php

session_start();

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
                <li><a href="main.php">Home</a></li>
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

    <div class="info-section">
        <div class="info-container">
            <div class="info-content-section">
                <div class="info-title">
                    <h1>Apple Watch</h1>
                </div>
                <div class="info-content">
                    <h3>Apple Watch is a wearable smartwatch that allows users to accomplish a variety of tasks, 
                        including making phone calls, sending text messages and reading email.  </h3>
                    <p>Apple announced its first major new hardware product in years, Apple Watch, in September 
                        2014. It had three key features: a precise and customizable timepiece, an intimate way 
                        to connect and communicate, and a comprehensive health and fitness companion. It has since 
                        evolved into the Apple wearable of today centered around health and fitness.
                    </p>
                        <div class="info-button">
                            <a href="https://www.apple.com/my/watch/">See more</a>
                        </div>
                </div>
            </div>
            <div class="info-image-section">
                <img src="images/applewatch.png">
            </div>
        </div>
    </div>

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

    <script src="script.js"></script>
</body>

</html>
