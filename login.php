<?php
error_reporting(0);
ini_set('display_errors', 0);

$conn = mysqli_connect('localhost','root','','applepals');

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $userRole = $_POST['userRole'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['userRole'] == 'admin'){

         $_SESSION['adminName'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['userRole'] == 'user'){

         $_SESSION['userName'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};

if(isset($_POST["submit"])){

   $_SESSION["email"] = $_POST["email"];
   $_SESSION['last_login_timestamp'] = time();  
   if($row['userRole'] == 'user'){
         header('location:user_page.php');
      }elseif($row['userRole'] == 'admin'){
         header('location:admin_page.php');
      }
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
        <a href="main.php"><img src="images\logo.png" class="logo" alt="logo"></a>
    </section>
	
    <div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>


</html>