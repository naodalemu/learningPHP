<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ID Card</title>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: monospace;
        }

        .card-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #ddd;
        }

        .card {
            width: 30%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: cornflowerblue;
            margin: 20px;
            border-radius:15px;
            border: 3px solid white;
            color: white;
        }

    </style>
</head>
<body>

    <?php

        include "movies.php";

        $person1 = new Person("P0001", "Naod", "Alemu", 2000);
        $person2 = new Person("P0002", "Leti", "Tarekegn", 15000);
        $person3 = new Person("P0003", "Beri", "Alemu", 10000);

        // $person1 -> salary = 5200;
        // echo $person1 -> salary."<br>";

        // $person1 -> id = "A3232";
        // echo $person1 -> id."<br>";

        // $person1 -> salary = 1200;
        // echo $person1 -> salary."<br>";

        // echo $person1;
    ?>

    <div class="card-container">

        <div class="card">
            <h2 class="name"><?= $person1 -> fname . " " . $person1 -> lname ?></h2>
            <h3 class="salary">$<?= $person1 -> nativeSalary() ?></h3>
        </div>
        <div class="card">
            <h2 class="name"><?= $person2 -> fname . " " . $person2 -> lname ?></h2>
            <h3 class="salary">$<?= $person2 -> nativeSalary("Canada") ?></h3>
        </div>
        <div class="card">
            <h2 class="name"><?= $person3 -> fname . " " . $person3 -> lname ?></h2>
            <h3 class="salary">£<?= $person3 -> nativeSalary("UK") ?></h3>
        </div>

    </div>
    
</body>
</html>