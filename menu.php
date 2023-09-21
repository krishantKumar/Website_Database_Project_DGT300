<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <!-- makes website responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <!-- Linking CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index2.css">

</head>
<body>
    <!-- navigation bar -->
    <section class="navbar">
      <div class="container">
        <div class="logo">
          <a href="index.html"><img src="images/HHSlogo.png" alt="HHS logo" class="img-responsive"></a>
        </div>
        
        <div class="menu text-right">
          
          <ul>
            <h1 class="nav-title">HENDERSON HIGH SCHOOL CAFE</h1>            
            <li>
              <a href="index.php">HOME</a>
            </li>
            <li>
              <a href="menu.php">ORDER</a>
            </li>
            <li>
              <a href="aboutus.php">ABOUT US</a>
            </li>
            <li>
              <a href="login.php">LOGIN</a>
            </li>
            <li>
              <a href="register.php">REGISTER</a>
            </li>
          </ul>
      </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <!-- navigation bar ends -->
          <!-- Background -->
    <section class="title-background3 text-center">
        <div class="container">
          <h1 class="title-text">ORDER</h1>
        </div>
      </section>
      <!-- Background ends -->
      <?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3 class="product-name"><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

    <!-- navigation columns -->
    <section class="nav-columns">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="menu.php">ORDER</a>
                </li>
                <li>
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <li>
                    <a href="login.php">LOGIN</a>
                </li>
                <li>
              <a href="register.php">REGISTER</a>
            </li>                
            </ul>
            <div class="clearfix"></div>
        </div>
        </section>
        <section class="social-media">
        <div class="socials">
        <ul>
            <li>
                <a href="#"><img width="48" height="48" src="https://img.icons8.com/fluency/96/facebook-new.png" alt="facebook-new"/></a>
            </li>
            <li>
                <a href="#"><img width="48" height="48" src="https://img.icons8.com/fluency/96/instagram-new.png" alt="instagram-new"/></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    </section>
    <!-- navigation columns ends -->

    <!-- footer -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. © Krishant Kumar</p>
        </div>
    </section>
    <!-- footer ends -->
</body>
</html>