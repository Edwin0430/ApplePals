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
                <li><a href="login.php">&#128100; Login</a></li>                <li><a href="main.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a class="active" href="about.php">About</a></li>
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

    <div class="wrapper">
        <div class="about-title">
            <h1>About Us</h1>
        </div>
        <div class="about">
            <div class="about-image-section">
                <img src="images/about.jfif">
            </div>
            <article>
                <h3>Apple Pals was founded by Edwin and Rachel in November 2022 - whereby the focus is to help our users to find the second-hand Apple products that they want.</h3>
                <p>This website can also help users to sell the Apple products that they want and help them earn their side income. We believe that technology is an enabler to help everyone with what they need.</p>
				<p>The button below can help you find out which products you want!</p>
                <div class="about-button">
                    <a href="productinfo.php">Learn More</a>
                </div>
            </article>
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

   
</body>

</html>
