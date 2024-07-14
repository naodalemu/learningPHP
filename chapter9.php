<?php

include "Movie.php";
$movie1 = new Movie("N0001", "DeJaVu", 4.99);
$movie2 = new Movie("N0002", "Driving Licence", 7.99);
$movie3 = new Movie("A0001", "Flight", 10.99);

echo "{$movie2->title}<br>";
echo $movie1->conversion("Japan")."<br>";
echo Movie::DISCOUNT."<br>";
echo $movie3->displayHeading("H1");
$movie2 -> rentalPrice = 1;
echo "{$movie2 -> rentalPrice}<br>";

echo $movie1;