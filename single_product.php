<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | BENYSTORE</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top" >
    <div class="container">
      <img src="assets/imgs/logo.png"class="logo">
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
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>


          <li class="nav-item">
            <a href='cart.html'><i class="fa-solid fa-cart-shopping"></i></a>
            <a href='account.html'><i class="fa-solid fa-user"></i></a> 
          </li>
          
         
          
      </div>
    </div>
  </nav>
<!-- single product -->

<section class="container single-product my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img class="img-fluid w-100 pb-1" src="assets/imgs/clothes1.jpg" id="mainImg">
            <div class="small-image-group">
                <div class="small-image-col">
                    <img src="assets/imgs/shoes1.avif" width="100%" class="small-img">
                </div>
                <div class="small-image-col">
                    <img src="assets/imgs/shop2.avif" width="100%" class="small-img">
                </div>
                <div class="small-image-col">
                    <img src="assets/imgs/shop3.avif" width="100%" class="small-img">
                </div>
                <div class="small-image-col">
                    <img src="assets/imgs/shop4.avif" width="100%" class="small-img">
                </div>
            </div>
        </div>




        <div class="col-lg-6 col-md-12 col-sm-12">
            <h6>Women Trench Coat</h6>
            <h3 class="py-4">Women's Fashion</h3>
            <h2>Ksh 1500</h2>
            <input type="number" value="1">
            <button class="buy-btn">Add To cart</button>
            <h4 class="mt-5 mb-5">Project details</h4>
            <span>The Details of this product will be displayed shortly.</span>
        </div>
    </div>
</section>
<!-- Related products -->
<section id="related-products " class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr class="mx-auto">
       
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured1.jpg">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Classic Handbag</h5>
            <h4 class="p-price">Ksh 4500 </h4>
            <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured2.jpg">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Classic Handbag</h5>
            <h4 class="p-price">Ksh 3500 </h4>
            <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured3.jpg">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Unisex Pads</h5>
            <h4 class="p-price">Ksh 1500 </h4>
            <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured4.jpg">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Trench Coat</h5>
            <h4 class="p-price">Ksh 2500 </h4>
            <button class="buy-btn">Buy Now</button>
        </div>



    </div>


</section>


      <!-- Footer -->
<footer class="mt-5 py-5 ">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img src="assets/imgs/logo.png">
            <p class="pt-3">We provide the best products for the most affordable prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
           <h5 class="pb-2">Featured</h5>
           <ul class="text-uppercase">
            <li><a href="#">men</a></li>
            <li><a href="#">women</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">new arrivals</a></li>
            <li><a href="#">clothes</a></li>
            <li><a href="#">shoes</a></li>
           </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>Old Mutual, First floor, Off Mama Ngina street</p>
            </div>
            <div>
                <h6 class="text-uppercase">Phone Number</h6>
                <p>0712345678</p>
            </div>
            <div>
                <h6 class="text-uppercase">Email</h6>
                <p>hello@magnes.gmail.com</p>
            </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row">
                <img src="assets/imgs/featured1.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/watch3.avif" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/clothes2.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/shoes3.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/featured3.jpg" class="img-fluid w-25 h-100 m-2">
            </div>
        </div>
    </div>

    <div class="copyright mt-5">
        <div class="row container mx-auto">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="assets/imgs/payment.jpg">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap mb-2">
                <p>&copy; 2024 All Rights Reserved</p>
                
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
       var mainImg= document.getElementById("mainImg");
       var smallImg= document.getElementsByClassName("small-img");

       for(let i=0; i<4; i++){
                smallImg[i].onclick= function(){
                mainImg.src=smallImg[i].src;
            }

       }
       
       
    </script>
</body>
</html>