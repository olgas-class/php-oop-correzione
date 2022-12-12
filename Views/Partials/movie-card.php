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