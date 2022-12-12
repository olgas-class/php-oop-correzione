<?php
require_once __DIR__ . "/Genre.php";

class Movie {
    private $title;
    public $genres;
    public $duration;
    public $poster;

    public function __construct(String $title, int $duration, String $poster, array $genres = []) {
        $this->title = $title;
        $this->genres = $genres;
        $this->duration = $duration;
        $this->poster = $poster;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDetails() {
        return "Movie: {$this->title}; Duration: {$this->duration} minutes";
    }

    public function getGenresAsString() {
        $allGenres = "";
        foreach ($this->genres as $index => $genre) {
            $allGenres .= $genre->name;
            if ($index < (count($this->genres) - 1)) {
                $allGenres .= ", ";
            }
        }
        return $allGenres;
    }
}
