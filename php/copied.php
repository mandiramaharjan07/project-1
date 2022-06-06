<?php
$articles = [
        ["title"=> "First Post", "content"=> "first post content"],
        ["title"=> "Second Post", "content"=> "Second post content"],
        
           ];
           var_dump($articles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1> My Blog </h1>
        <ul>
           <?php foreach ($articles as $article): ?>
             <li>
                <h2> <?= $article['title']; ?></h2>
                <p> <?= $article['content']; ?></p>
           </li>
           <?php endforeach; ?>
        </ul>
</body>
</html>