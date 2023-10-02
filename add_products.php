<?php

$conn = mysqli_connect('localhost','root','','applepals');


if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $productImg = $_FILES['productImg']['name'];
   $productImg_tmp_name = $_FILES['productImg']['tmp_name'];
   $productImg_folder = 'images/'.$productImg;

   $insert_query = mysqli_query($conn, "INSERT INTO `products`(productName, price, productImg) VALUES('$p_name', '$p_price', '$productImg')");

   if($insert_query){
      move_uploaded_file($productImg_tmp_name, $productImg_folder);
      $message[] = 'product added succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ");
   if($delete_query){
      header('location:add_products.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:add_products.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_productImg = $_FILES['update_productImg']['name'];
   $update_productImg_tmp_name = $_FILES['update_productImg']['tmp_name'];
   $update_productImg_folder = 'images/'.$update_productImg;

   $update_query = mysqli_query($conn, "UPDATE `products` SET productName = '$update_p_name', price = '$update_p_price', productImg = '$update_productImg' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_productImg_tmp_name, $update_productImg_folder);
      $message[] = 'product updated succesfully';
      header('location:add_products.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:add_products.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="layout.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<section id="header">
        <a href="admin_page.php"><img src="images\logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="nav">
                
                <li><a href="logout.php">Logout</a></li>
                <li><a href="admin_page.php">Home</a></li>
                <li><a class="active" href="add_products.php">Add Product</a></li>
                <li><a href="admin_product.php">Product</a></li>
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

<div class="add-products-container">

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Add a New Product</h3>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <input type="file" name="productImg" accept="images/png, images/jpg, images/jpeg, images/webp" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

<br>
<br>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>Product Image</th>
         <th>Product Name</th>
         <th>Product Price</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="images/<?php echo $row['productImg']; ?>" height="100" alt=""></td>
            <td><?php echo $row['productName']; ?></td>
            <td>RM <?php echo $row['price']; ?></td>
            <td>
               <a href="add_products.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="add_products.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="images/<?php echo $fetch_edit['productImg']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['productName']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_productImg" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the product" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>

</body>
</html>