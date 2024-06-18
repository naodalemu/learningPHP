<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        * {
            font-family: monospace;
        }

        .border-vs {
            border: none;
        }
    </style>
</head>

<body>

    <h1>
        Recommended Books
    </h1>

    <?php
    
    $teams = [
        "Arsenal",
        "Manchester City",
        "Liverpool",
        "Aston Villa",
        "Tottenham Hotsputr",
        "Newcastle United",
        "Chelsea",
        "Manchester United",
        "West Ham United",
        "Brighton Hove Albion",
        "Bournemouth",
        "Crystal Palace",
        "Wolverhampton Wanderers",
        "Fulham",
        "Everton",
        "Brentford",
        "Nottingham Forest",
        "Luton Town",
        "Burnley",
        "Sheffield United",
    ];

    $matches = [];

    for ($i = 0; $i < 40; $i++) {
        for ($j = 0; $j < 40; $j++) {
            if ($i%20 != $j%20) {
                $matches[] = array($teams[$i%20], $teams[$j%20]);
            }
        }
    }

    shuffle($matches);

    ?>


    <table border="2px" Cellspacing="10px">
        <thead>
            <tr>
                <th>Home Team</th>
                <th class="border-vs">  </th>
                <th>Away Team</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matches as $match) : ?>
                    <tr>
                        <td><?= $match[0] ?></td>
                        <td class="border-vs">VS</td>
                        <td><?= $match[1] ?></td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>