<?php

session_start();

require_once('user_component.php');
require_once('getDb.php');

$database=new CreateDb(dbname:"applepals",tablename:"products");

if(isset($_SESSION["email"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 900) // 900 = 15 * 60  
           {  
            header('location:logout.php');
           }  
      }  
      else  
      {  
           header('location:login.php');  
      }  
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
        <a href="user_page.php"><img src="images\logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="nav">
                <li><a href="user_page.php">Home</a></li>
                <li><a href="user_product.php">Product</a></li>
                <li><a href="user_about.php">About</a></li>
                <li><a href="user_contact.php">Contact</a></li>
                <li><a href="user_cart.php">&#128722;</a></li>
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
                    <h1>Mac</h1>
                </div>
                <div class="info-content">
                    <h3>"MacBook" is a term used for a brand of Mac notebook computers that Apple started producing in 2006.  </h3>
                    <p>The American multinational corporation created MacBook computers when it consolidated its PowerBook and iBook 
                        lines during its transition to Intel processor-based products. As of 2013, there are two types of MacBook 
                        computers: the base-level MacBook Air and the upper-level MacBook Pro.
                    </p>
                        <div class="info-button">
                            <a href="https://www.apple.com/my/mac/">See more</a>
                        </div>
                </div>
            </div>
            <div class="info-image-section">
                <img src="images/mac.webp">
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
						<li><a href="user_page.php">About us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Product Info</h4>
					<ul>
						<li><a href="user_iphones.php">Iphones</a></li>
						<li><a href="user_ipad.php">Ipads</a></li>
						<li><a href="user_mac.php">Mac</a></li>
						<li><a href="user_applewatch.php">Apple Watch</a></li>
						<li><a href="user_accessories.php">Accessories</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>shop with us</h4>
					<ul>
						<li><a href="user_product.php">products</a></li>
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
