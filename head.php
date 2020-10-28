<?php
require __DIR__ . '/data.php';

require __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/fakenews.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Fake News</title>
</head>

<body>

    <header>
        <div class="header">
            <h1>FAKE NEWS NETWORK</h1>
            <h3>Your untrusty news source</h3>
        </div>
    </header>

    <nav class="navbar sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Most Read Articles This Week:</a>
        <a class="navbar-brand" href="/index.php">All</a>
        <a class="navbar-brand" href="/food.php">Food</a>
        <a class="navbar-brand" href="/drinks.php">Drinks</a>
        <a class="navbar-brand" href="/lifestyle.php">Lifestyle</a>
    </nav>