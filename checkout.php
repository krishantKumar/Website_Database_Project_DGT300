<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thanks For Ordering</title>
   <!-- linking a favicon -->
   <link rel="icon" href="images/favicon.ico" type="image/ico">   
   <!-- Linking  my CSS codes -->
   <link rel="stylesheet" href="css/index2.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body><br><br>
   <section class="text-center">
<h2 class="container">Thank You For Your Order!</h2>
<h1 class="container"> Your Order Will Arrive Soon</h1>
<div class="cart-btn">  
      <a href="index.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Home</a>
   </div>
</section>
</body>
</html>
