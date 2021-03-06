<?php

class MovieDatabase
{
    private $conn;

    public function __construct()
    {
        require_once 'Database.php';
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function GetRandomMovies()
    {
        $lijst = array();
        $query = "SELECT * FROM movies ORDER BY RAND() LIMIT 10";
        $stm = $this->conn->prepare($query);
        if ($stm->execute()) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($result as $item) {
                // Hier stonden de entiteit class functies maar hij wilde de database kolom namen
                $entMovie = new EntMovie($item->movieId, $item->title, $item->genres);
                array_push($lijst, $entMovie);
            }
            return $lijst;

        } else {
            echo "oef foutje";
        }
    }
}
