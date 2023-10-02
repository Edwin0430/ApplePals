<?php

session_start();

require_once('admin_component.php');
require_once('getDb.php');

$database=new CreateDb(dbname:"applepals",tablename:"products");

if (isset($_POST['add'])){
    /// print_r($_POST['id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "id");

        if(in_array($_POST['id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart!')</script>";
            echo "<script>window.location = 'admin_product.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'id' => $_POST['id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'id' => $_POST['id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
       
    }
}

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
    <title>ApplePals - product - page 1</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>

    <section id="header">
        <a href="admin_page.php"><img src="images\logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="nav">
                <li><a href="logout.php">Logout</a></li>
                <li><a href="admin_page.php">Home</a></li>
                <li><a href="add_products.php">Add Product</a></li>
                <li><a class="active" href="admin_product.php">Product</a></li>
                <li><a href="admin_cart.php">&#128722;</a></li>
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

    

    <section id="fe-product" class="section-p1">
        <div class="container">
        <?php
         $result = $database->getData();
         while ($row = mysqli_fetch_assoc($result)){
             admin_component($row['productName'], $row['price'], $row['productImg'], $row['id']);
         }
        ?>   
        </div>
        
    </section>

   
</body>


</html>