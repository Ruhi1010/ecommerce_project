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
                <a class="nav-link" href="index.html">Home</a>
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


      <!--Home-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>Best Prices</span>This Season</h1>
          <p>E-shop offers the best products for the most affortable prices</p>
          <button>Shop Now</button>
        </div>
      </section>

      <!--Brand-->
      <section id="brand" class="container">
        <div class="row">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets\imgs\brand1.jpeg"/>
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets\imgs\brand2.jpeg"/>
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets\imgs\brand3.jpeg"/>
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets\imgs\brand4.jpeg"/>
        </div>
      </section>

      <!--New-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets\imgs\1.jpeg"/>
            <div class="details">
              <h2>Extreamely Awesome Shoes</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <!-- Two -->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets\imgs\2.jpeg"/>
            <div class="details">
              <h2>25% Off</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>

          <!-- Three -->
           <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets\imgs\3.jpeg"/>
            <div class="details">
              <h2>Other Products</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>


        </div>
      </section>


      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our Featured</h3>
          <hr class="mx-auto">
          <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">
          
          

        <?php include('server/get_featured_products.php'); ?>

        <?php while($row = $featured_products->fetch_assoc()){ ?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets\imgs\<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
             <h4 class="p-price">৳ <?php echo $row['product_price']; ?></h4>
             <button class="buy-btn">Buy Now</button>
          </div>
          <?php } ?>


          

        </div>
      </section>


      <!--Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>STARTING SALE NOW ON</h4>
          <h1>Winter Collection <br> Up to 20% OFF</h1>
          <button class="text-uppercase">shop now</button>
        </div>
      </section>


      <!--Shoes & Joggers-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Shoes & Joggers</h3>
          <hr class="mx-auto">
          <p>Here you can check our shoe collection</p>
        </div>
        <div class="row mx-auto container-fluid">
          
          

        <?php include('server/get_shoes_joggers.php'); ?>

        <?php while($row=$shoes_joggers_products->fetch_assoc()){?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
             <h4 class="p-price">৳ <?php echo $row['product_price']; ?></h4>
             <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
          </div>

          <?php } ?>


        </div>
      </section>


      <!--Mobile Phone-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Mobile Section</h3>
          <hr class="mx-auto">
          <p></p>
        </div>
        <div class="row mx-auto container-fluid">
          
          

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets\imgs\gadget1.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name">iPhone 15 Pro Max</h5>
             <h4 class="p-price">৳124,999.00</h4>
             <button class="buy-btn">Buy Now</button>
          </div>


          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets\imgs\gadget2.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name">Samsung Galaxy S23 Ultra</h5>
             <h4 class="p-price">৳95,999.00</h4>
             <button class="buy-btn">Buy Now</button>
          </div>


          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets\imgs\gadget3.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name">Asus ROG Phone 7</h5>
             <h4 class="p-price">৳89,999.00</h4>
             <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets\imgs\gadget4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div> 
            <h5 class="p-name">Google Pixel 9 Pro</h5>
             <h4 class="p-price">৳130,999.00</h4>
             <button class="buy-btn">Buy Now</button>
          </div>

        </div>
      </section>


        <!--Laptop-->
        <section id="featured" class="my-5">
          <div class="container text-center mt-5 py-5">
            <h3>Laptop Section</h3>
            <hr class="mx-auto">
            <p></p>
          </div>
          <div class="row mx-auto container-fluid">
            
            
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\laptop1.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">MacBook Air M1</h5>
               <h4 class="p-price">৳86,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\laptop2.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">Acer Nitro V 16</h5>
               <h4 class="p-price">৳109,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\laptop3.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">ASUS Zenbook Pro 16X OLED</h5>
               <h4 class="p-price">৳351,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\laptop4.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">HP Laptop 15-fd0268TU</h5>
               <h4 class="p-price">৳70,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
          </div>
        </section>


         <!--Watch-->
         <section id="featured" class="my-5">
          <div class="container text-center mt-5 py-5">
            <h3>Watch Section</h3>
            <hr class="mx-auto">
            <p></p>
          </div>
          <div class="row mx-auto container-fluid">
            
            
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\watch1.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">Apple Watch Series 7</h5>
               <h4 class="p-price">৳36,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\watch2.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">Galaxy Watch4</h5>
               <h4 class="p-price">৳16,999.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\watch3.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">XINJI NOTHING 1</h5>
               <h4 class="p-price">৳5,250.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets\imgs\watch4.jpeg"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div> 
              <h5 class="p-name">IMILAB W02</h5>
               <h4 class="p-price">৳3,899.00</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
  
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