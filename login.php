<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <!-- makes website responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Linking CSS file -->
    <link rel="stylesheet" href="index.css">
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
              <a href="index.html">HOME</a>
            </li>
            <li>
              <a href="menu.html">ORDER</a>
            </li>
            <li>
              <a href="aboutus.html">ABOUT US</a>
            </li>
            <li>
              <a href="contactus.html">CONTACT US</a>
            </li>
            <li>
              <a href="login.html">LOGIN</a>
            </li>
          </ul>
      </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <!-- navigation bar ends -->
        <!-- Background -->
        <section class="title-background text-center">
      <div class="container">
        <h1>LOGIN</h1>
      </div>
    </section>
    <!-- Background ends -->
    <br>
    <br>
    <div style="text-align: center;">
<!-- login form -->
        <h1>Login form</h1>
    </div>
<form action="" method="post">
    <table border="1" align="center">
        <tr>
            <td>
                <label>Enter First Name</label></td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>
                    <label>Enter Last Name</label></td>
                    <td><input type="text" name="last_name"></td>
                </tr>
                <tr>
                    <td>
                    <label>Enter Email</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>
                    <label>Enter Phone</label></td>
                    <td><input type="phone" name="phone"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
                </tr>
        </table>
    </form>
<!-- login form ends -->

    <!-- navigation columns -->
    <section class="nav-columns">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li>
                    <a href="menu.html">MENU</a>
                </li>
                <li>
                    <a href="aboutus.html">ABOUT US</a>
                </li>
                <li>
                    <a href="contactus.html">CONTACT US</a>
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
    
<?php
$conn=mysqli_connect('localhost','root','','website_project_dgt300');
//if(mysqli_connect_errno()){
//    echo "connection fail";
//}else{
//    echo "connected";
//}

if(isset($_POST['save'])){
    $First_name = $_POST['first_name'];
    $Last_name = $_POST['last_name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];

    $insert = "INSERT INTO email_database(first_name,last_name,email,phone) 
    VALUES('$First_name','$Last_name','$Email','$Phone')";
    $run_insert = mysqli_query($conn,$insert);
    if($run_insert){
        echo "record inserted";
    }
    else{
        echo "try again";
    }
}
?>
</body>
</html>