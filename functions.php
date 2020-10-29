<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

//fetches the articles for each author based on id's
function getAuthorById(int $articles_id, array $authors): string
{

    foreach ($authors as $author) {

        if ($author['id'] === $articles_id) {

            return $author['author'];
        }
    }
}

//sorts the articles newest to oldest
function sortByDate(array $articles): array
{
    usort($articles, function ($a, $b) {
        return $b['published_date'] <=> $a['published_date'];
    });
    return $articles;
}
