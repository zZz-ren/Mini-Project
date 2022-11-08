<?php

session_start();

$user_name_active = $_SESSION['user_name'];

echo $user_name_active;

$connection = mysqli_connect('localhost', 'root', '', 'test_db');

if ($connection) {
   // echo "ok";
}

if (isset($_POST['comment-send'])) {
   // echo "hiii";
   $value = $_POST['rate'];
   $comment = $_POST['comment'];
   // echo $value;
   // echo $comment;

   $request = "UPDATE `users` SET `comment`='{$comment}' WHERE `user_name` ='{$user_name_active}'";

   $result = mysqli_query($connection, $request);
   $select_req = "SELECT `comment` FROM `users` WHERE `user_name`='{$user_name_active}'";
   $res = mysqli_query($connection,$select_req); 
   $row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">travel.</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
      <h1>about us</h1>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="images/bg-1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Start your extraordinary vacation with us. Yatra Samadhan understands that being in service industry means
            to be highly sensitive to customer satisfaction.
            Our expert team will meet your needs to its expectations.</p>
         <p>We are in the business since years and are committed to provide you the best services.
            Since our team understands the value of money, we make sure that your travel journey is perfect in the
            budget you have decided for yourself.
            We will help you not only in savings but also help you in adding value to your travel diaries</p>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>top destinations</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>affordable price</span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>24/7 guide service</span>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading-title"> clients reviews </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Couldn't be happier with the service from TravelOnline and Ashleigh.Not only did we finally get to
                  travel with the company helping us to move dates with no extra costs, the company organised
                  everything.Have the notifications on and looking at the next one to book. Will absolutely use this
                  company again! Thank you!</p>
               <h3>-Samantha Oakes</h3>
               <span>traveler</span>
               <img src="images/pic-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Very helpful when I was trying to change my booking. Great holiday and a great price
               <h3>-Rahul Singh</h3>
               <span>traveler</span>
               <img src="images/pic-1.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>All went smoothly. Great deal.</p>
               <h3>-Robert Hart</h3>
               <span>traveler</span>
               <img src="images/pic-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Thank you for your great service. Absolutely no hassles at all. Would definitely book through you
                  again.</p>
               <h3>-Belinda</h3>
               <span>traveler</span>
               <img src="images/pic-4.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>We would recommend Travelle's guide and will be using them again in the future
                  Kristy and her team gave us excellent service
                  And have an amazing time</p>
               <h3>Yash Joshi</h3>
               <span>traveler</span>
               <img src="images/pic-5.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>I had the most amazing holiday. This was my first time to Fiji and the InterContinental. I loved every
                  moment & cannot wait to go back again. Booking with Travel Online was professional, easy & went
                  without a hitch. Thank you to Lisa Scull and your team.
               <h3>-Rhea Shah</h3>
               <span>traveler</span>
               <img src="images/pic-6.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <?php if ($value == 1) { ?>

                  <i class="fa fa-star rated" style="font-size:24px"></i>
                  <!-- <i class="fa fa-star " style="font-size:24px"></i>
                  <i class="fa fa-star " style="font-size:24px"></i>
                  <i class="fa fa-star " style="font-size:24px"></i>
                  <i class="fa fa-star " style="font-size:24px"></i> -->

                  <?php
   }

?>

                  <?php if ($value == 2) { ?>

                  <i class="fa fa-star rated" style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <!-- <i class="fa fa-star " style="font-size:22px"></i>
                  <i class="fa fa-star " style="font-size:22px"></i>
                  <i class="fa fa-star " style="font-size:22px"></i> -->

                  <?php
   }


?>

                  <?php if ($value == 3) { ?>

                  <i class="fa fa-star rated" style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <!-- <i class="fa fa-star " style="font-size:22px"></i>
                  <i class="fa fa-star " style="font-size:22px"></i> -->

                  <?php
   }


?>
                  
                  <?php if ($value == 4) { ?>

                  <i class="fa fa-star rated" style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <!-- <i class="fa fa-star " style="font-size:22px"></i> -->

                  <?php
   }


?>
                  
                  <?php if ($value == 5) { echo "hii 5";?>
                  
                  <i class="fa fa-star rated" style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>
                  <i class="fa fa-star rated " style="font-size:24px"></i>

                  <?php
   }

   ?>
                  <p>
                     <?php 
                        while ($row) {
                           $row['comment'];
                        }
                     ?>
                  </p>
   <?php

}

?>

               </div>
            </div>


         </div>

      </div>

   </section>

   <section class="booking">

      <form action="" method="post" class="book-form">

         <div class="flex">

            <div class="inputBox">
               <span>how many Ratings :</span>
               <input type="number" placeholder="Number of Stars" name="rate">
            </div>
            <div class="comment inputBox">
               <span>Comment :</span>
               <input style="height: 15rem;" type="text" name="comment">
            </div>
         </div>

         <input type="submit" value="comment" class="btn" name="comment-send">

      </form>

   </section>

   <!-- reviews section ends -->















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>Us</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>