<?php include "demo.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don't know, it's something like Demo</title>

    <style>
        * {
            font-family: monospace;
        }
    </style>

</head>

<body>

    <ul>
        <?php foreach ($filterMovies($movies, "2010-07-01") as $filteredmovie): ?>
            <li><?= "<b style='font-size: 40px'>{$filteredmovie["name"]}</b> in {$filteredmovie["date"]}" ?></li>
        <?php endforeach ?>
    </ul>

</body>

</html>