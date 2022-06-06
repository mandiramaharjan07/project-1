<?php 

     $hour=16;
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>my website</title>
     </head>
     <body>
     <?php if ($hour<12): ?>
        Good Morning
    
    <?php elseif ($hour<18): ?>
        Good Afternoon
    
    <?php elseif ($hour<22): ?>
        Good Evening
    
    <?php else: ?>
        Good Night
    
        <?php endif; ?>
     </body>
     </html>
