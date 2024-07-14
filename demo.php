<?php

$movies = [
    [
        "name" => "The Shawshank Redemption",
        "date" => "1994-09-23"
    ],
    [
        "name" => "The Godfather",
        "date" => "1972-03-24"
    ],
    [
        "name" => "The Dark Knight",
        "date" => "2008-07-18"
    ],
    [
        "name" => "Pulp Fiction",
        "date" => "1994-10-14"
    ],
    [
        "name" => "The Lord of the Rings: The Return of the King",
        "date" => "2003-12-17"
    ],
    [
        "name" => "Forrest Gump",
        "date" => "1994-07-06"
    ],
    [
        "name" => "Inception",
        "date" => "2010-07-16"
    ],
    [
        "name" => "Fight Club",
        "date" => "1999-10-15"
    ],
    [
        "name" => "The Matrix",
        "date" => "1999-03-31"
    ],
    [
        "name" => "The Silence of the Lambs",
        "date" => "1991-02-14"
    ]
];

$filterMovies = function ($datas, $key) {
    $filteredMovies = [];
    foreach ($datas as $data) {
        if (strtotime($data["date"]) > strtotime($key)) {
            $filteredMovies[] = $data;
        }
    }

    return $filteredMovies;
};