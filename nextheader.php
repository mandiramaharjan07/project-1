<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>

   .header .header-2 .flex .navbar a{
   margin:0 1rem;
   font-size: 2rem;
   background-color:var(--light-color);
   color:var(--light-bg);
  padding:12px;
  border-radius: 10%;
}
.header .header-2 .flex .navbar a:hover{
   color:var(--light-bg);
   text-decoration: underline;
}
.header .header-1 .flex{
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   max-width: 1200px;
   margin:0 auto;
   font-size: 2rem;
   color:#333;
}
</style>
<body>
   

<header class="header">
   <div class="header-1">
      <div class="flex">
        <div class="share">
           <a href="https://www.facebook.com/Second-hand-bookstore-105149452177412/" class="fab fa-facebook"></a>
           <a href="https://www.instagram.com/mandiramh/" class="fab fa-instagram"></a>
        </div>
        <!-- <p>  <a href="login.php">Login</a> <a href="register.php">register</a></p> -->
      </div>
   </div>
<div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Second Hand BookStores</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">products</a>
            <a href="contact.php">contact</a>
            <a href="orders.php">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>
</body>
</html>