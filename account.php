<?php

session_start();
include('server/connection.php');

if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit();
}


if(isset($_GET['logout'])){
  if(isset($_SESSION['logged_in'])){
    unset($_SESSION['logged_in']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    header('location: login.php');
    exit();
  }
}





if(isset($_POST['change_password'])){
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmPassword'];
  $user_email = $_SESSION['user_email'];

// if password dont match
if($password !== $confirmPassword){
  header('location: account.php?error=passwords dont match');


// if password less than 6 characters
}else if(strlen($password) < 6){
  header('location: account.php?error=password must be at least 6 characters');
  

//no errors
}else {

 $stmt = $conn->prepare("UPDATE users SET user_password=? WHERE user_email=?");
  $stmt->bind_param('ss',md5($password),$user_email);


  if($stmt->execute()){
     header('location: account.php? account.php?massage=password has been updated successfully');



  }else{
    header('location: account.php? account.php?error=could not update password');
  }




}

}



 //get oders
 if(isset($_SESSION['logged_in'])){
  $user_id = $_SESSION['user_id'];
  $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id =? ");
$stmt->bind_param('i',$user_id);
$stmt->execute();

$orders = $stmt->get_result();//[]




 }









?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets\css\style.css"/>
</head>
<body>




  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <img class="logo" src="assets\imgs\logo.jpeg"/>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>


          <li class="nav-item">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <a href="account.html"><i class="fas fa-user"></i></a>
          </li>

         
          
          
          
        </ul>
        
      </div>
    </div>
  </nav>








  <!--Account-->
  <section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
        <p class="text-center" style="color:green"><?php if(isset($_GET['register_success'])){ echo $_GET['register_success']; }?></P>
        <p class="text-center" style="color:green"><?php if(isset($_GET['login_success'])){ echo $_GET['login_success']; }?></P>
        <h3 class="font-weight-bold">Account Info</h3>
            <hr class="mx-auto">
            <div class="account-info">
                <p>Name: <span><?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name']; } ?></span></p>
                <p>Email: <span><?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email']; } ?></span></p>
                <p><a href="#orders" id="orders-btn">Your orders</a></p>
                <p><a href="account.php?logout=1" id="logout-btn">Logout</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <form id="account-form" method="POST" action="account.php">
              <p class="text-center" style="color:red"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></P>
                  <p class="text-center" style="color:green"><?php if(isset($_GET['massage'])){ echo $_GET['massage']; }?></P>
                <h3>Change Password</h3>
                <hr class="mx-auto">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="account-password-confirm" name="confirmPassword" placeholder="Confirm Password" required/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Change Password" name="change_password" class="btn" id="change-pass-btn"/>
                </div>
            </form>
        </div>
    </div>
  </section>





   <!--Orders-->
   <section id="orders" class="orders container my-5 py-3">
    <div class="container mt-2">
        <h2 class="font-width-bolde text-center">Your Orders</h2>
        <hr class="mx-auto">
    </div>

    <table class="mt-5 pt-5">
        <tr>
            <th>Order id</th>
            <th>Order cost</th>
            <th> Order status </th>
            <th> Order Date </th>
            <th> Order details </th>

        <</tr>

        <?php while($row = $orders->fetch_assoc() ){ ?>
        <tr>
            <td>
               <div >
               
                <div>
                    <p class="mt-3"><?php echo $row['order_id']; ?></p>
                </div>
               </div>
            </td>
<td> 
  <span><?php echo $row['order_cost']; ?></span>
        </td>
        <td> 
  <span><?php echo $row['order_status']; ?></span>
        </td>

        <td> 
  <span><?php echo $row['order_date']; ?></span>
        </td>

<td>  
  <from>
    <input class="btn order-details-btn" type="submit" value="details" />
        </from>
        </td>

          
        </tr>

        <?php } ?>
    </table> 

  </section>





  <!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto mt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src="assets\imgs\logo.jpeg"/>
        <p class="pt-3">We try to provide the best quality products in affordable prices</p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">Joggers</a></li>
          <li><a href="#">Shoes</a></li>
          <li><a href="#">Phones</a></li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Watches</a></li>
        </ul>
       </div>

       <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">address</h6>
          <p>Arambagh, Motijheel, Dhaka-1000, Dhaka 1000</p>
        </div>
        
        <div>
          <h6 class="text-uppercase">phone</h6>
          <p>+880 1234 567890</p>
        </div>

        <div>
          <h6 class="text-uppercase">e-mail</h6>
          <p>info@gmail.com</p>
        </div>
       </div>

       <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img src="assets\imgs\featured1.jpeg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets\imgs\featured2.jpeg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets\imgs\featured3.jpeg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets\imgs\featured4.jpeg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets\imgs\laptop3.jpeg" class="img-fluid w-25 h-100 m-2"/>
        </div>
       </div>
    </div>

    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <img src="assets\imgs\payment.jpeg"/>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap mb-2">
          <p>ODYSSEY @ 2024 All rights reserved</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>

      </div>
    </div>

  </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>