<?php
    $articles=
    [
        "title"=>"first post!",
        "content"=>"this is the first of my post."
    ];
    [
        "title"=>"another post...",
        "content"=>"this is the rest of my post."
    ];
    [
        "title"=>"read this",
        "content"=>"you must read this now."
    ];
    var_dump($articles);
?>

<html>
    <head>
        <title>my blog</title>
    </head>
    <body>
        <header>
            <h1>my blog</h1>
        </header>
        <main>
            <ul>
                <?php foreach ($articles as $article):?>
                <li>
                    <article>
                        <h2><?php $article['title']; ?></h2>
                        <p><?php $article['content']; ?></p>
                    </article>
                </li>
                <?php endforeach; ?>
            </ul>

        </main>
    </body>
</html>