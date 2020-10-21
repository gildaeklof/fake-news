<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fake News</title>
</head>

<body>

    <?php foreach ($articles as $article) :
        $title = $article['title'];
        $content = $article['content'];
        $published_date = $article['published_date'];
        $img = $article['img'];
        $likes = $article['likes'];

        $firstName = $authors[$article['authorId']]['firstName'];
        $lastName = $authors[$article['authorId']]['lastName'];
        $name = "$firstName $lastName";
    ?>

        <article>

            <div class="article">
                <h3 class="title"><?= $title; ?></h3>
                <img src="<?= $img; ?>">
                <p class="content"><?= $content; ?></p>
                <p>Published: <?= $published_date; ?></p>
                <p>Written by <?= $name; ?></p>
                <p><?= $likes; ?></p>
            </div>

        </article>

    <?php endforeach; ?>
</body>

</html>