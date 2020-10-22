<?php


class RatingDatabase
{

    private $conn;

    public function __construct()
    {
        require_once 'Database.php';
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function GetUserbyMovie($MovieId, $UserLijst, $Counter)
    {
        $lijst = array();
        $ArrayCount = Count($MovieId);
        if ($Counter < $ArrayCount) {
            $query = "Select * from ratings where movieId = $MovieId[$Counter]";
            $stm = $this->conn->prepare($query);
            if ($stm->execute()) {
                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                foreach ($result as $item) {
                    // Hier stonden de entiteit class functies maar hij wilde de database kolom namen
                    $entRating = new EntRating($item->userId, $item->movieId, $item->rating);
                    array_push($UserLijst, $entRating);
                }
            }
            $Counter++;
            return $this->GetUserbyMovie($MovieId, $UserLijst, $Counter);

        } else {
            return $UserLijst;
        }
    }

    public function GetMovieByUser($UserLijst, $MovieIds, $Counter)
    {
        $ArrayCount = Count($UserLijst);
        if ($Counter < $ArrayCount) {
            $query = "Select movies.movieId, movies.title, movies.genres
                        from movies
                        INNER JOIN ratings on movies.movieId = ratings.movieId
                        where ratings.userId = $UserLijst[$Counter] && ratings.rating >= 4
                        GROUP BY movies.title";
            $stm = $this->conn->prepare($query);
            if ($stm->execute()) {
                $result = $stm->fetchAll(PDO::FETCH_OBJ);

                foreach ($result as $item) {
                    // Hier stonden de entiteit class functies maar hij wilde de database kolom namen
                    $EntMovies = new EntMovie($item->movieId, $item->title, $item->genres);
                    array_push($MovieIds, $EntMovies);
                }
            }
            $Counter++;
            return $this->GetMovieByUser($UserLijst, $MovieIds, $Counter);

        } else {
            return $MovieIds;
        }
    }

}