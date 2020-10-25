<?php

require __DIR__ . '/head.php'

?>

<article>

    <?php foreach ($articles as $article) : ?>
        <?php
        $title = $article['title'];
        $img = $article['img'];
        $content = $article['content'];
        $date = $article['published_date'];
        $likes = $article['likes'];

        ?>

        <div class="container">
            <div class="content">
                <div class="text-center">
                    <h2><?= $title ?></h2>
                    <img src="<?= $img; ?>" class="img-fluid" alt="Responsive image">
                    <p><?= $content ?></p>
                    <div class="info">
                        <p><?= 'Posted by: ' . getAuthorById($article['id'], $authors); ?></p>
                        <p><?= $date ?></p>
                    </div>
                    <button type="button" class="btn btn-primary">
                        Like <span class="badge badge-light"><?= $article['likes']; ?></span>
                    </button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</article>

<?php
require __DIR__ . '/footer.php'
?>


</body>

</html>