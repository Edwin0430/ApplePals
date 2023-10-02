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
                    <h1>iPhones</h1>
                </div>
                <div class="info-content">
                    <h3>iPhone, series of smartphones produced by Apple Inc., combining mobile telephone, 
                        digital camera, music player, and personal computing technologies. </h3>
                    <p>After more than two years of development, the device was first released in the United States in 2007. 
                        The iPhone was subsequently released in Europe in 2007 and Asia in 2008.Apple designed its first mobile 
                        smartphone to run the Mac OS X operating system, made popular on the company’s personal computers. The 
                        device’s most revolutionary element was its touch-sensitive multisensor interface. The touchscreen allowed 
                        users to manipulate all programs and telephone functions with their fingertips rather than a stylus or physical 
                        keys. This interface—perfected, if not invented, by Apple—recreated a tactile physical experience; 
                        for example, the user could shrink photos with a pinching motion or flip through music albums using 
                        a flicking motion. The iPhone also featured Internet browsing, music and video playback, a digital 
                        camera, visual voicemail, and a tabbed contact list.
                        <br>
                        Up until today, Apple has developed iPhone from iPhone 3G up until Iphone 14 Pro Max.</p>
                        <div class="info-button">
                            <a href="https://www.apple.com/my/iphone/">See more</a>
                        </div>
                </div>
            </div>
            <div class="info-image-section">
                <img src="images/iphones.jpg">
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

    
</body>

</html>