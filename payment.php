<?php

session_start();


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>


          <li class="nav-item">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <a href="account.html"><i class="fas fa-user"></i></a>
          </li>

         
          
          
          
        </ul>
        
      </div>
    </div>
  </nav>



      <!--payment-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weigth-bold">payment</h2>
            <hr class="mx-auto">
        </div>
    
       <div class="mx-auto container text-center">
        <P><?php echo $_GET['order_status'];?></P>
       <p>Total payment : ৳ <?php echo $_SESSION['total'];?></p>
       <input class="btn btn-primary" type="submit" value="Pay Now" />
       </div>
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