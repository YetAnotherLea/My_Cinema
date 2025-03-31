<?php
//Va chercher les infos sur les films
class CheckMovie {
    private $db;

    public function __construct() {
        require "../../config/database.php";
        $this->db = $db;
    }

    public function getMovie() {
        $limit = 25;
        $selectMovie = $this->db->prepare
        ("SELECT * FROM `movie_genre_distributor` ORDER BY movie_id LIMIT $limit");
        $selectMovie->setFetchMode(PDO::FETCH_ASSOC);
        $selectMovie->execute();
        return $selectMovie->fetchAll();
    }
}

$checkMovie = new CheckMovie();
