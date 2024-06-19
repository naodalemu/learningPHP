<?php

include "AwardWinningMovie.php";

$TitledPerson1 = new PersonTitle("T0001", "Kiyanu", "Reevs", 20000, "Master");
$Person1 = new Person("T0001", "Kiyanu", "Reevs", 20000);
echo $TitledPerson1 -> recommended("UK");
echo $TitledPerson1 -> displayHeading('H1');
echo $Person1 -> displayHeading("H1");