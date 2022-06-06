<?php
    $articles=["first post","second post","third post"];
    foreach($articles as $article){
        echo $article.",";
    }
    foreach($articles as $index=> $article){
        echo $index.'-'.$article.",";
    }
    
?>