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

        <div class="productinfo-wrapper">
            <h1>Products</h1>
            <div class="productinfo-container">
                <div class="productinfo-box">
                    <img src="images/iphones.jpg">
                    <h3>Iphones</h3>
                    <a href="iphones.php" class="productinfo-btn">know more</a>
                </div>
                <div class="productinfo-box">
                    <img src="images/ipads.jpg">
                    <h3>Ipads</h3>
                    <a href="ipad.php" class="productinfo-btn">know more</a>
                </div>
                <div class="productinfo-box">
                    <img src="images/mac.jpg">
                    <h3>Mac</h3>
                    <a href="mac.php" class="productinfo-btn">know more</a>
                </div>
                <div class="productinfo-box">
                    <img src="images/applewatch.png">
                    <h3>Apple Watch</h3>
                    <a href="applewatch.php" class="productinfo-btn">know more</a>
                </div>
                <div class="productinfo-box">
                    <img src="images/accessories.jpg">
                    <h3>Accessories</h3>
                    <a href="accessories.php" class="productinfo-btn">know more</a>
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
						<li><a href="#">Iphones</a></li>
						<li><a href="#">Ipads</a></li>
						<li><a href="#">Mac</a></li>
						<li><a href="#">Apple Watch</a></li>
						<li><a href="#">Accessories</a></li>
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

   
</body>

</html>