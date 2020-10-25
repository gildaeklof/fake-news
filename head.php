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
    <link rel="shortcut icon" href="fakenews.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Fake News</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>Fake News Network</h1>
            <p>Your untrusty news source</p>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="#">Most Read Articles This Week:</a>
    </nav>