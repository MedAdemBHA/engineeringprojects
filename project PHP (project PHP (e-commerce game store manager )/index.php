<?php
session_start();
include 'config.php';

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo-white.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="referrer" content="strict-origin" />

  <title>GAME SHOP | Home</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/all.min.css" rel="stylesheet"/>
 


  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css"  />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                GAME Shop
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#product">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#why-us">Why Us</a>
                </li>
                <li class="nav-item">
                  <div class="user_option_box">
                    <a href="cart.php" class="btn btn-outline-warning bt-cart">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>  
                        <span>
                          Cart
                        </span>
                        
                    </a>
                    
                    <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="btn btn-outline-warning bt-cart">logout</a>
                    </a>

                   

                   
                          <?php
                            
                            $userRole=mysqli_query($conn, "SELECT * FROM `user_info` WHERE id = '$user_id'" ) or die('query failed');
                          
                              if(mysqli_num_rows($userRole)  > 0){
                                $row = mysqli_fetch_assoc($userRole);


                            };
                          ?>
                           <?php
                          if ($row['user_type'] == 'admin') {
                             echo   '<a  class="btn btn-outline-warning bt-cart" href="admin.php" >
                             <i class="fa fa-user" aria-hidden="true"></i>
                             <span>
                               
                             </span>   
                             </a>';
                          } else if ($row['user_type'] == 'user') {
                            echo   '<a  class="btn btn-outline-warning bt-cart" href="index.php" >
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                            
                            </span>   
                            </a>';
                          }
                          
                    ?>


                            

                    
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.png" alt="first slide" style="width:100%";>
            </div>
          </div>
         
          
        </div>
        
    </section>
    <!-- end slider section -->
  </div>


  <!-- product section -->
  <section id="product" class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
        
      <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img1.png" class="card-img-top" alt="Men Pants">
              <div class="card-body">
                <h5 class="card-title">STAR WARS Jedi: Survivor</h5>
                <p class="card-text">€ 59.50</p>
               
              </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img2.png" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Minecraft Java Edition</h5>
                <p class="card-text">€ 23.94</p>
               
              </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img3.png" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">FIFA 23</h5>
                <p class="card-text">€ 45.10</p>
               
              </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img4.png" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Horizon Zero Dawn</h5>
                <p class="card-text">€ 19.90</p>
              
              </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img5.png" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Euro Truck Simulator 2</h5>
                <p class="card-text">€ 7.42</p>
             
              </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="images/img6.png" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Grand Theft Auto V (PC)</h5>
                <p class="card-text">€ 14.15</p>
              
              </div>
            </div>
        </div>
 
        <div class="btn_box">
          <a href="product.php" class="view_more-link">
            View More
          </a>
        </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->

  <section id="about" class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            Welcome to our online game store! We are a passionate team of gaming enthusiasts dedicated to providing the best gaming experience to our customers. With a diverse selection of games ranging from action-packed adventures to mind-bending puzzles, we cater to every gaming appetite. Our user-friendly website ensures easy browsing and seamless transactions, while our exceptional customer support is always ready to assist. Explore our catalog, discover competitive deals, and join our gaming community for the latest news and updates. Choose us as your trusted destination for all your gaming needs and embark on unforgettable gaming adventures today!
              
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="img-box">
            <img src="images/about-us.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why us section -->

  <section id="why-us" class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/WS.png" alt="truck">
            </div>
            <div class="detail-box">
              <h5>
              Wide Selection
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/w2.png" alt="parcel">
            </div>
            <div class="detail-box">
              <h5>
              Exceptional Customer Service           </h5>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/w3.png" alt="ribbon">
            </div>
            <div class="detail-box">
              <h5>
              Competitive Pricing and Special Offers
              </h5>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why us section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="index.php" class="navbar-brand">
                <span>
                  GAME Shop
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              JEMMEL,5020
            </p>
            <p>
              <i class="fa fa-mobile" aria-hidden="true"></i>
              +216 53375471        
            </p>       
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              Med.adem.1999@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index.php">
                  Home
                </a>
              </li>
              <li>
                <a href="product.php">
                  Products
                </a>
              </li>
              <li>
                <a href="index.php #about">
                  About
                </a>
              </li>
              <li>
                <a href="index.php #why-us">
                  Why Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <button class="scrollup" onclick="topFunction()" id="myBtn" title="Go to top">
    <i class='fa fa-arrow-circle-up'></i></button>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
    <!-- page up btn -->
    <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
      
      $(this).addClass('transition');
      }, function(){
      
      $(this).removeClass('transition');
      });
      });
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function()
      {scrollFunction()};

      function scrollFunction() {
       if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         mybutton.style.display = "block";
       }
       else {
         mybutton.style.display = "none";
       }
      }
      function topFunction() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
      }
     var modal = document.getElementById('myModal');

     var images = document.getElementsByClassName('myImages');

     var modalImg = document.getElementById("img01");

     for (var i = 0; i < images.length; i++) {
     var img = images[i];
      
     img.onclick = function(evt) {
         modal.style.display = "block";
         modalImg.src = this.src;
         captionText.innerHTML = this.alt;
       }
     }
 
     var span = document.getElementsByClassName("close")[0];

     span.onclick = function() { 
       modal.style.display = "none";
     }  
   </script> 

</body>

</html>