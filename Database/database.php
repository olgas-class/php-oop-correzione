<?php
require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/Genre.php";

$genres = [
    new Genre('action'),
    new Genre('fantasy')
];

$movies = [
    new Movie(
        'Matrix',
        120,
        'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg',
        [
            $genres[1]
        ]
    ),
    new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres),
    new Movie('Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', $genres),
    new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres),
    new Movie('Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', $genres),
    new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres)
];
