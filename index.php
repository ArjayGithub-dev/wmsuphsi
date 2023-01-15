<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- Custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Title and Logo in tab -->
   <link rel="icon" type="image/png" href="images/logos/phsi.png">
   <title>Home | WMSU - Peace and Human Security Institute</title>

</head>
<body>
   

<!-- Header Section Start -->
<header class="header">
   <!-- Logo -->
   <!--<img src="phsi.png" alt="">-->
   <a href="#" class="logo">PHSI</a>
   <!-- Navbar -->
   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="#">Home</a>
      <a href="#">About PHSI</a>
      <a href="#">Announcements</a>
      <a href="#">Organizations</a>
      <a href="#">Upcoming Events</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"><a href="">Login</a></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
</header>
<!-- Header Section End -->


<!-- Account Form Section Start  -->
<div class="account-form">
   <div id="close-form" class="fas fa-times"></div>
   <div class="buttons">
      <span class="btn active login-btn">Login</span>
      <span class="btn register-btn">Register</span>
   </div>

   <form class="login-form active" action="">
      <h3>Login now</h3>
      <input type="email" placeholder="Enter your email" class="box">
      <input type="password" placeholder="Enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">Remember me</label>
         <a href="#">Forgot password?</a>
      </div>
      <input type="submit" value="Login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>Register now</h3>
      <input type="email" placeholder="Enter your email" class="box">
      <input type="password" placeholder="Enter your password" class="box">
      <input type="password" placeholder="Confirm your password" class="box">
      <input type="submit" value="Register now" class="btn">
   </form>
</div>
<!-- Account Form Section End  -->



<!-- Home Section Start  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <!-- PHSI Carousel Start -->
         <section class="swiper-slide slide" style="background: url(images/carousel-images/phsi-carousel.jpg) no-repeat;">
            <div class="content" id="unesco_content">
               <h3>Peace and Human Security Institute</h3>
               <p>Peace is more than 
                  the absence of war, 
                  it is living together 
                  with our differences – 
                  of sex, race, language, 
                  religion or culture – while 
                  furthering universal respect 
                  for justice and human rights 
                  on which such coexistence depends
                  <br>
                  – Tap Tant, UNESCO</p>
               <a href="#" class="btn">Read more</a>
            </div>
         </section>
         <!-- PHSI Carousel End -->

         <!-- UNESCO Carousel Start -->
         <section class="swiper-slide slide" style="background: url(images/carousel-images/unesco-carousel.png) no-repeat;">
            <div class="content">
               <h3>WMSU Youth Peace Mediators - <br>
                  UNESCO Club</h3>
               <p>Peace comes from being able to contribute the best that we have, 
                  and all that we are, toward creating a world that supports everyone. 
                  But it is also securing the space for others to contribute the best 
                  that they have and all that they are.</p>
               <a href="#" class="btn">Read more</a>
            </div>
         </section>
         <!-- UNESCO Carousel End -->

         <!-- Biorisk Carousel Start -->
         <section class="swiper-slide slide" style="background: url(images/carousel-images/biorisk-carousel.png) no-repeat;">
            <div class="content">
               <h3>WMSU Biosafety and Biosecurity Committee</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">Read more</a>
            </div>
         </section>
          <!-- Biorisk Carousel End -->
      </div>
      <!--Next/Prev Carousel Button-->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!--Current Carousel 3 dots-->
      <div class="swiper-pagination"></div>
   </div>
</section>
<!-- Home Section End  -->

<!------------------------------------------- Free Content: CALL FOR DONATIONS/VOLUNTEERS/FEATURED ARTICLES Start -------------------------------------------------------------------------------------------->
<section class="free_content">
   <div class="image">
      <img src="images/content-images/unesco-p3.jpg"alt="">
   </div>
   <div class="content">
      <h3 class="about-title">Call for Donations</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus.</p>
      <a href="#" class="btn">I want to donate</a>
   </div>
</section>
<!-------------------------------------------  Free Content: CALL FOR DONATIONS/VOLUNTEERS/FEATURED ARTICLES End -------------------------------------------------------------------------------------------->



<!--------------------------------------------- Announcements Section Start ----------------------------------------------------------------------------->
<section class="announcements">
   <h1 class="heading">Announcements </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/content-images/phsi-p1.jpg" alt="">
            <h3>Date posted</h3>
         </div>
         <div class="content">
            <h3>Announcement Title</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/content-images/phsi-p2.jpg"  alt="">
            <h3>Date posted</h3>
         </div>
         <div class="content">
            <h3>Announcement Title</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/content-images/phsi-p3.jpg"  alt="">
            <h3>Date posted</h3>
         </div>
         <div class="content">
         <h3>Announcement Title</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>
</section>
<!---------------------------------------------- Announcements Section Start ----------------------------------------------------------------------------------->

<!---------------------------------------------- Organizations Section Start  ------------------------------------------------------------------------------------------->
<section class="organization">
   <h1 class="heading">Organizations</h1>
   <div class="box-container">

      <div class="box" id="unesco">
         <img src="./images/logos/unesco.png" alt="">
         <h3>WMSU Youth Peace Mediators - UNESCO Club</h3>
         <p>Lorem ipsum</p>
      </div>

      <div class="box" id="biorisk">
         <img src="./images/logos/biorisk.png" alt="">
         <h3>WMSU Biosafety and Biosecurity Committee</h3>
         <p>Lorem ipsum</p>
      </div>
   </div>
</section>
<!----------------------------------------------- Organizations Section End --------------------------------------------------------------------------------->



<!----------------------------------------------- Review Section Start --------------------------------------------------------------------------------->
<section class="reviews">
   <h1 class="heading">Our reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="./images/student-profile/pic-4.png" alt="">
            <h3>Dima Giba</h3>
            <div class="label">
               WMSU Student
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="./images/student-profile/pic-1.png" alt="">
            <h3>Ben Toth</h3>
            <div class="label">
               PHSI
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="./images/student-profile/pic-2.png" alt="">
            <h3>John Tahol</h3>
            <div class="label">
              UNESCO Club
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="./images/student-profile/pic-3.png" alt="">
            <h3>Ratbu Rat</h3>
            <div class="label">
            UNESCO Club
            </div>
         </div>
      </div>
   </div>
   <div class="swiper-pagination"></div>
</section>

<!----------------------------------------------- Review Section End --------------------------------------------------------------------------------->


<!-- Footer Section Starts  -->
<section class="footer">
   <div class="box-container">

      <div class="box">
         <h3>Quick links</h3>
         <a href="#" class="link">Home</a>
         <a href="#" class="link">About PHSI</a>
         <a href="#" class="link">Announcements</a>
         <a href="#" class="link">Organizations</a>
         <a href="#" class="link">Upcoming Events</a>
      </div>

      <div class="box">
         <h3>PHSI</h3>
         <a href="#" class="link">History</a>
         <a href="#" class="link">Mission & Vision</a>
         <a href="#" class="link">Administrations</a>
         <a href="#" class="link">Programs</a>
      </div>

      <div class="box">
         <h3>Organizations</h3>
         <a href="#" class="link">WMSU Youth Peace Mediators - UNESCO Club</a>
         <a href="#" class="link">WMSU Biosafety and Biosecurity Committee</a>
      </div>

      <div class="box">
         <h3>Social Links</h3>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-youtube"></a>
         </div>
      </div>

   </div>
   <div class="credit"><span>PHSI</span> | All Rights reserved! </div>
</section>
<!-- Footer section Ends -->

<!-- Swiper Js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom Js file link  -->
<script src="js/script.js"></script>

</body>
</html>