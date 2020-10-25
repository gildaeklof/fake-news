<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

function getAuthorById(int $articles_id, array $authors): string
{

    foreach ($authors as $author) {

        if ($author['id'] === $articles_id) {

            return $author['author'];
        }
    }
}

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.