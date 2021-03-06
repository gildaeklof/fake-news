<?php

require __DIR__ . '/head.php'

?>

<article>

    <?php foreach (sortByDate($articles) as $article) :
        if ($article['category'] === 'drinks') : ?>
            <?php
            $title = $article['title'];
            $img = $article['img'];
            $content = $article['content'];
            $date = $article['published_date'];
            $likes = $article['likes'];
            $alt = $article['alt'];

            ?>

            <div class="container">
                <div class="content">
                    <div class="text-center">
                        <h2><?= $title ?></h2>
                        <img src="<?= $img; ?>" class="img-fluid" alt="<?= $alt ?>">
                        <?= $content ?>
                        <div class="info">
                            <h5><?= 'Posted by: ' . getAuthorById($article['id'], $authors); ?></h5>
                            <h6><?= $date ?></h6>
                            <button type="button" class="btn btn-primary">
                                Like <span class="badge badge-light"><?= $article['likes']; ?></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</article>

<?php
require __DIR__ . '/footer.php'
?>