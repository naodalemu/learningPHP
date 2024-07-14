<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don't know, it's something like Demo</title>
</head>

<body>


    <?php

        $books = [
            [
                "name" => "Do Androids Dream of Electric sheeps",
                "author" => "Philip K. Dick",
                "year" => 1968,
                "purchaseURL" => "https://www.google.com"
            ],
            [
                "name" => "The Langoliers",
                "author" => "Douglas Adams",
                "year" => 1959,
                "purchaseURL" => "https://www.google.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "year" => 2023,
                "purchaseURL" => "https://www.google.com"
            ]
        ]

    ?>


    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= "<b style='font-size: 40px'>{$book["name"]}</b> by {$book["author"]} in {$book["year"]}" ?></li>
        <?php endforeach ?>
    </ul>








</body>

</html>