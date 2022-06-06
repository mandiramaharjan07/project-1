<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<html>
    <head>
        <title>

        </title>
    </head>
<style>
    <body>
  
     .navbar {
   margin:0 1rem;
   font-size: 4rem;
   background-color: #666;;
   color:var(--light-bg);
  padding:12px;
  border-radius: 10%;
}
</style>
<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo"> Admin</a>
        <nav class="navbar">
            <a href="admin_page.php" style="background-color:#666;  padding:12px;
  border-radius: 10%; color:var(--light-bg); ">Home </a>
            <a href="admin_products.php" style="background-color:#666;  padding:12px;
  border-radius: 10%; color:var(--light-bg);"> Products</a>
            <a href="admin_orders.php" style="background-color:#666;  padding:12px;
  border-radius: 10%; color:var(--light-bg);">Orders</a>
            <a href="admin_users.php" style="background-color:#666;  padding:12px;
  border-radius: 10%; color:var(--light-bg);">Users</a>
            <a href="admin_contact.php" style="background-color:#666;  padding:12px;
  border-radius: 10%; color:var(--light-bg);">Messages</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-users"></div>
        </div>
    
        <div class="account-box">
            <p> name : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p> email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
        </div>
    </div>
</header></body>
</html>