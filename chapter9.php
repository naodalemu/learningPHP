<?php

include "movies.php";
$mov1 = new Movie("N0001", "Lusso", 4.99);
$mov2 = new Movie("N0002", "Junior", 5.99);
$mov3 = new Movie("A0001", "Avatar", 10.99);

echo $mov3 -> title."<br>";
echo $mov3 -> nativeCurrencyPrice("Japan");

echo $mov3->displayHeading('H1');