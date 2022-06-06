<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
<style>
   .heading{
      margin-top:20px;
      font-size:30px;
      text-align:center;
   }
   .about .flex{
   max-width: 1700px;
   margin:0 auto;
  
   display: flex;
   align-items: center;
   flex-wrap: wrap;

}
.about .flex .content{
   flex:1 3 90rem;
   padding:10rem;
   background-color: var(--light-bg);
}


</style>
<body>

<?php include 'nextheader.php'; ?>
<div class="heading">
   <h3>About us</h3>
   <!-- <p> <a href="home.php">home</a> / about </p> -->
</div>
<section class="about">
   <div class="flex">
      <div class="image">
         <img src="./img/about.jpg" alt="">
      </div>
      <div class="content">
         <h3>Why choose us?</h3>
         <p>Second Hand Bookstore is a online platform to buy secondhand books.</p>
         <p>We provide the best secondhandbooks at the low cost. </p>
         <p> We are making people feel easy to find books through online.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>