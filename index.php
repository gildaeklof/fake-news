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
    <section class="container">

        <?php foreach ($articles as $article) : ?>
            <article>
                <div class="container">
                    <h3><?= $article['title']; ?></h3>
                    <img src="<?= $article['img']; ?>">
                    <p class="content"><?= $article['content']; ?></p>
                    <p><?= $article['published_date']; ?></p>
                    <p><?= 'Posted by: ' . getAuthorById($article['id'], $authors); ?></p>
                    <p><?= $article['likes']; ?></p>
                </div>
            </article>

        <?php endforeach; ?>

    </section>

</body>

</html>