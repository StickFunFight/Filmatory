<?php


class UserDatabase
{
    private $conn;

    public function __construct()
    {
        require_once 'Database.php';
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function SetMovieLiking($UserId, $MovieId)
    {
        $query = "INSERT INTO userliking (UserId,MovieId) VALUES (?,?)";
        $stm = $this->conn->prepare($query);
        $stm->bindParam(1, $UserId);
        $stm->bindParam(2, $MovieId);
        if ($stm->execute()) {
            //TODO hier moet nog wat hippe logica
        } else {
            echo "Ging iets fout";
        }
    }

    public function GetLikedMvovies($UserId)
    {
        $lijst = array();
        $query = "Select movies.movieId,movies.title, movies.genres
                From movies
                INNER JOIN userliking ON movies.movieId = userliking.MovieId 
                WHERE UserId = $UserId";
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