<?php

//phpmyadmin ma database create garda name user host yei rakhnu parxa, pw chai auto generate garna milxa, tei yeta copy garera lekhne ho.
    $db_host="localhost";
    $db_name="cms";
    $db_user="cms_www";
    $db_pass="(@e9ZRm.wnTpq_s1";

    //mysql sanga connect gareko mathi ko data lai
    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    // database sanga connect vayo ki nai check gareko.
    if(mysqli_connect_error()){
//connect  vayena vaney:
        echo mysqli_connect_error();
        exit;
    }
//connect vayo vaney  
    echo "connected successfully";
//database bata lignu parne data article vanne table bata ani published date anusar sort vako.
    $sql="SELECT *
    FROM article
    ORDER BY published_at";

    $results= mysqli_query($conn,$sql);
    if($results===false){
        echo mysqli_error($conn);
    }
    else{
        $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);
    }
?>

<body>
    <h1>my blog</h1>
    
    <?php
    if(empty($articles)):?>
    <p>article not found</p>
    <?php else: ?>
        <ul>
            <?php foreach($articles as $article): ?>
            <li>
                <h2> <a href="article.php?id=<?=$article['id'];?>"><?=$article['title'];?></a> </h2>
                <p><?=$article['content'];?></p>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?> 
</body>