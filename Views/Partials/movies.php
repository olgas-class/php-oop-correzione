<main class="bg-light">

    <section class="container">
        <h2 class="text-center">I nostri migliori film</h2>
        <div class="row row-cols-4">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <?php include __DIR__ . "/movie-card.php"; ?>
                </div>
            <?php } ?>
        </div>
    </section>
</main>