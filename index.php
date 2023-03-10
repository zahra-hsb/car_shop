<?php
require_once 'inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>فروشگاه لوازم خودرو</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.php" class="logo"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto" style="margin-left: 20%;">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">صفحه اصلی</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.php">فروشگاه</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.php">درباره ما</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">ارتباط با ما</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="login_menu">
                     <ul>
                        <li><a href="login.php">ورود</a></li>
                        <li><a href="cart/cart.php"><img src="images/trolly-icon.png"></a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                     </ul>
                  </div>
                  <div></div>
               </form>
            </div>
            <div id="main">
               <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="images/toggle-icon.png" style="height: 30px;"></span>
            </div>
         </nav>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                 
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <?php 
                     $cat_query = mysqli_query($connection, "SELECT * FROM category");
                     while($cat_array = mysqli_fetch_array($cat_query)):
                     ?>
                              <div class="cat-paragraph"><a href="#"><?php echo $cat_array['cat_name']; ?></a></div>
                  <?php endwhile; ?>

                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">انواع قطعات خودرو</h1>
                              <p class="banner_text">با مناسب ترین قیمت و کیفیت</p>
                              <div class="contact_bt"><a href="shop.php">خرید</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="cat-paragraph">  <?php 
                     $cat_query = mysqli_query($connection, "SELECT * FROM category");
                     while($cat_array = mysqli_fetch_array($cat_query)):
                     ?>
                              <div class="cat-paragraph"><a href="#"><?php echo $cat_array['cat_name']; ?></a></div>
                  <?php endwhile; ?></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">اکسسوری های خودرو</h1>
                              <p class="banner_text">عرضه اکسسوری ها در طرح های مختلف</p>
                              <div class="contact_bt"><a href="shop.php">خرید</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- cycle section start -->
      <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">محصولات ما</h1>
            <p class="cycle_text">برای خرید محصولات ابتدا وارد شوید</p>
            <div class="buy_bt login"><a href="login.php">ورود</a></div>
            <div class="cycle_section_2 layout_padding">
               <?php 
                  $product_query = mysqli_query($connection, "SELECT * FROM products");
                  while($proArray = mysqli_fetch_array($product_query)):

?>
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main">
                        <h6 class="number_text"><?php echo $proArray['id']; ?></h6>
                        <div class="image_2"><img src="images/<?php echo $proArray['image']; ?>"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text"><?php echo $proArray['title']; ?></h1>
                     <p class="lorem_text"><?php echo $proArray['description']; ?></p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="cart/cart.php">خرید</a></div>
                        <h4 class="price_text">قیمت <span style=" color: #e10087">T</span> <span style=" color: #325662"><?php echo $proArray['id']; ?></span></h4>
                     </div>
                  </div>
               </div><br/>
               <?php endwhile; ?>
            </div>
            <div class="read_btn_main">
               <div class="read_bt"><a href="shop.php">فروشگاه</a></div>
            </div>
         </div>
      </div>
      <!-- cycle section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <h1 class="about_taital">درباره فروشگاه ما</h1>
            <p class="about_text" style="direction: rtl">فروشگاه ما فعالیت خود را از سال 1400 شروع کرده است...</p>
            <div class="about_main">
               <img src="images/img-5.png" class="image_5">
            </div>
            <div class="read_bt_1"><a href="about.php">درباره ما</a></div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <?php 
                  $comment_query = mysqli_query($connection, "SELECT * FROM comments");
                  while($cmrow = mysqli_fetch_array($comment_query)):
               ?>
               <div class="carousel-item active">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">نظرات مشتریان</h1>
                        <div class="client_section_2">
                           <!-- <div class="client_left"> -->
                              <!-- <div><img src="images/client-img.png" class="client_img"></div> -->
                           <!-- </div> -->
                           <div class="client_right">
                              <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              <p class="client_text"><?php echo $cmrow['comment']; ?></p>
                              <h3 class="client_name"><?php echo $cmrow['name']; ?></h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                 <?php endwhile; ?>
                  
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">تماس با ما</h1>
               <form action="admin/actions.php" method="POST">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="نام" name="name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="ایمیل" name="email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="متن پیام" rows="5" id="comment" name="comment"></textarea>
                  </div>
               </form>
               <div class="send_btn"><a href="index.php?add-comment">ارسال</a></div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 col-sm-12 padding_0">
                  <div class="map_main">
                     <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_0">مازندران</span></a></div>
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_0">تماس بگیرید 123467890</span></a></div>
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="padding_left_0">ourshop@gmail.com</span></a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     </ul>
                  </div>
                  <input type="text" class="email_text" placeholder="ایمیل خود را وارد نمایید." name="Enter Your Email">
                  <div class="subscribe_bt"><a href="#">اشتراک</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start --> 
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright All Right Reserved By. accessory shop</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
           document.getElementById("main").style.marginLeft= "0";
          
         }

         $("#main").click(function(){
             $("#navbarSupportedContent").toggleClass("nav-normal")
         })
      </script>
   </body>
</html>