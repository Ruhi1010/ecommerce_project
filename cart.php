<?php
session_start();

if(isset($_POST['add_to_cart'])){


  //if user has already added a product to cart
  if(isset($_SESSION['cart'])){

    $products_array_ids = array_column($_SESSION['cart'], 'product_id'); // [2,3,4,10,15]
    // if product has already been added to cart or not
    if(!in_array($_POST['product_id'], $products_array_ids)){

      $product_id = $_POST['product_id'];


            $product_array = array(
                            'product_id' => $_POST['product_id'],
                            'product_name' => $_POST['product_name'],
                            'product_price' => $_POST['product_price'],
                            'product_image' => $_POST['product_image'],
                            'product_quantity' => $_POST['product_quantity']
                      
            );
            $_SESSION['cart'][$product_id] = $product_array;

    // if product has been added to cart
    }else{
      echo '<script>alert("Product was already added to cart");</script>';
    }


    //if this is the first product
    }else{
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
                     'product_id' => $product_id,
                     'product_name' => $product_name,
                     'product_price' => $product_price,
                     'product_image' => $product_image,
                     'product_quantity' => $product_quantity
               
    );

    $_SESSION['cart'][$product_id] = $product_array;
    // [2=>[], 3=>[], 5=>[]]
        }

// remove product from cart
}elseif(isset($_POST['remove_product'])){

  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);




}else{
  header('Location: index.php');
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

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



      <!--Cart-->
      <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-width-bolde">Your Cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>


            <?php foreach($_SESSION['cart'] as $key => $value){ ?>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php echo $value['product_image']; ?>"/>
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>৳</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form method="POST" action="cart.php">
                              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
                              <input type="submit" name="remove_product" class="remove-btn" value="remove" />
                            </form>
                            
                        </div>
                    </div>
                </td>

                <td>
                    <input type="number" value="<?php echo $value['product_quantity']; ?>"/>
                    <a class="edit-btn" href="#">Edit</a>
                </td>

                <td>
                    <span>৳</span>
                    <span class="product-price">1,499.00</span>
                </td>
            </tr>

            <?php } ?>
           
        </table>




        <div class="cart-total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>৳1,499.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>৳1,499.00</td>
                </tr>
            </table>
        </div>


        <div class="checkout-container">
            <button class="btn checkout-btn">Check Out</button>
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