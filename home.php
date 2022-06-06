<?php
include 'config.php';
session_start();

// $user_id = $_SESSION['user_id'];
// if(isset($user_id)){
//     header('location: ./login.php');
// }
if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
 
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
 
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    <!-- custom css file link  -->
    <link rel="stylesheet" href=" ./css/style.css">
 <style>
    .title{
       font-size:30px;
       text-align:center;
     
       padding:20px;

    }
  
    .content1{
       text-align:center;
       font-size:15px;
       /* color:white; */
       /* margin-left:200px;
       align-items:center; */
    }
     .content1 h3{
      font-size:25px;
      /* margin-left:400px; */
      padding:20px;
      /* align-items:center; */
    }
    .content1 a{
      font-size:25px;
      /* margin-left:400px;
      */
      /* align-items:center; */
    }
     .products .box-container .box{
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding:2rem;
   text-align: center;
   border:var(--border);
   position: relative;
}
   .products .box-container .box .price{
   position: absolute; 
   margin-left:22rem;
   top:3rem; left:1rem;
   border-radius: .5rem;
   padding:0.5rem;
   font-size: 2.5rem;
   color:var(--white);
   background-color:rgb(76, 76, 76);
}



 </style>
 </head>
 <body> 
 <?php include 'header.php'; ?>
 <section class="home">
    <div class="content">
       <h3>“Today a reader, tomorrow a leader.”</h3>
       <p>Wear the old coat, and buy a book.</p>
       <a href="about.php" class="white-btn">discover more</a>
    </div>
 </section>
 <section class="products">
 
    <h1 class="title">Latest products</h1>
    <div class="box-container">
 
       <?php  
          $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 9") or die('query failed');
          if(mysqli_num_rows($select_products) > 0){
             while($fetch_products = mysqli_fetch_assoc($select_products)){
       ?>
      <form action="" method="post" class="box">
       <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
       <div class="name"><?php echo $fetch_products['name']; ?></div>
       <div class="price">RS<?php echo $fetch_products['price']; ?>/-</div>
       <input type="number" min="1" name="product_quantity" value="1" class="qty">
       <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
       <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
       <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
       <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
       <?php
          }
       }else{
          echo '<p class="empty">no products added yet!</p>';
       }
       ?>
    </div>
    <div class="load-more" style="margin-top: 2rem; text-align:center">
       <a href="shop.php" class="white-btn">load more</a>
    </div>
 </section>
 <section class="about">
 
    <div class="flex">
       <div class="image">
          <img src="./img/abouts.jpg" alt="">
       </div>
       <div class="content1">
          <h3>About us</h3>
          <p style="line-height:4rem; font-size:20px;">
Second Hand Book Store is an online book store. It is created with an aim to create the largest community of book readers in Nepal. In today’s time when most of the people are fond of new technologies, there are still many people who are sticking to the traditional method when it comes to reading.
 People still prefer reading hard copy books rather than e-book like Kindle by Amazon where we can read, store and can buy many e-books inside it. </p>
          <a href="about.php" class="btn">read more</a>
       </div>
    </div>
 </section>
 <section class="home-contact">
    <div class="content1">
       <h3 style="color:white">Have any questions?</h3>
       <p  style="color:white ; padding:40px;font-size:20px">If you have any confusion or problem you can contact us. Feel free to contact us . Thank you!</p>
       <a href="contact.php" class="white-btn">contact us</a>
    </div>
 </section>
 <?php include 'footer.php'; ?>
 <script src="./js/script.js"></script>
 </body>
 </html>



