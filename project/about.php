<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Dalam era digital seperti sekarang, banyak orang lebih memilih untuk membeli buku secara online karena kemudahan dan kenyamanan yang ditawarkan. Selain itu, dengan membeli buku secara online, Anda juga dapat menghemat waktu dan biaya transportasi</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/tere liye.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/tereliyewriter/" target="blank" class="fab fa-instagram"></a>
         </div>
         <h3>Tere Liye</h3>
      </div>

      <div class="box">
         <img src="images/nora2.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/norarobertsauthor/" target="_blank" class="fab fa-instagram"></a>
         </div>
         <h3>Nora Robets</h3>
      </div>

      <div class="box">
         <img src="images/Andrea_Hirata.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/hirataandrea/" class="fab fa-instagram" target="_blank"></a>
         </div>
         <h3>Andrea Hirata</h3>
      </div>


   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>