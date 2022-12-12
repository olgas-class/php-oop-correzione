<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

$genres = [
    new Genre("Action"),
    new Genre("Fantasy")
];

$matrix = new Movie("Matrix", 120, "https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg", $genres);
$starwars = new Movie("Starwars", 120, "https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg", $genres);

$movies = [
    $matrix,
    $starwars
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="bg-light">

        <section class="container">
            <h2 class="text-center">I nostri migliori film</h2>
            <div class="row row-cols-4">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $movie->poster; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2><?php echo $movie->getTitle(); ?></h2>
                                <p class="card-text">
                                    Duration: <?php echo $movie->duration ?> minutes
                                </p>
                                <!-- <ul class="list-group list-group-flush">
                                    <?php foreach ($movie->genres as $genre) { ?>
                                        <li class="list-group-item"><?php echo $genre->name; ?></li>
                                    <?php } ?>
                                </ul> -->
                                <p class="card-text">
                                    Genres: <?php echo $movie->getGenresAsString(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </section>
    </main>

</body>

</html>