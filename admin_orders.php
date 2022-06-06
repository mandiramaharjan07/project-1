<?php
include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location: ./login.php');
}

if(isset($_POST['update_order'])){

    $order_update_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
    $message[] = 'payment status has been updated!';
 
 }
 
 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_orders.php');
 }

//  if(isset($_GET['update_order'])){
//    $delete_id = $_GET['delete'];
//    mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
//    header('location:admin_orders.php');
// }

// $value = $_POST("update_order");
// console.log(value);

 
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>orders</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href=" ./css/admin_style.css">
    </head>
    <style>
  :root{
   --purple:#603f3f;
   --red:#BA0020FF;
   --orange:#8F5B34;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-white:#ccc;
   --light-bg:#f5f5f5;
   --border:.1rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

   h1{
   font-size:40px;
   text-align:center;
   padding:20px;
   
}

</style>


    <body>
        <?php include 'admin_header.php'; ?>
        <section class="orders">
<h1 class="title">placed orders</h1>
<div class="box-container">
   <?php
   $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
   if(mysqli_num_rows($select_orders) > 0){
      while($fetch_orders = mysqli_fetch_assoc($select_orders)){
   ?>
   <div class="box">
      <p> user id : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
      <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
      <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
      <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
      <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
      <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
      <p> total products : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
      <p> total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
      <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
      <form action="" method="post">
         <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
         <?php if($fetch_orders['payment_status']!='completed'){
            ?>
         }
         <select name="update_payment" id="select" >
            <option value=""> Select one</option>
            <option <?php if($fetch_orders['payment_status']== 'pending'){ echo "selected";} ?> value="pending">pending </option>
            
            <option <?php if($fetch_orders['payment_status']== 'completed'){echo "selected";}   ?> value="completed" >completed</option>
         </select>
         <input type="submit" value="update" name="update_order"  class="option-btn">
         
         <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         <?php }?>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no orders placed yet!</p>';
   }
   ?>
</div>
</section>
<script src="admin_script.js"></script>

    </body>
    </html>