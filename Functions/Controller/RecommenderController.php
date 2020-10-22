<?php

include '../functions/controller/UserController.php';
include '../functions/Models/EntMovie.php';
include '../functions/controller/RatingController.php';


class RecommenderController
{
    private $Ucontroller;
    private $Rcontroller;

    public function __construct()
    {
        $this->Ucontroller = new UserController();
        $this->Rcontroller = new RatingController();
    }

    public function GetLikedMovies($UserId)
    {
        $MovieLijst = array();
        $lijst = $this->Ucontroller->GetMovieLiking($UserId);

        foreach ($lijst as $item) {
            array_push($MovieLijst, $item->getMovieId());
        }
        return $MovieLijst;
    }

    public function GetLikedGenre($UserId)
    {
        $GenreLijst = array();
        $lijst = $this->Ucontroller->GetMovieLiking($UserId);

        foreach ($lijst as $item) {
            array_push($GenreLijst, $item->getGenres());
        }
        return $GenreLijst;
    }


    public function GetUserByMovie($MovieLijst, $VulbareArray)
    {
        $UserLijst = array();
        $UserLijst = $this->Rcontroller->GetUser($MovieLijst, $VulbareArray, 1);
        return $UserLijst;
    }

    public function GetMoviesByUsers($UserLijst, $Array){

        $MovieLijst = array();
        $MovieLijst = $this->Rcontroller->GetMovie($UserLijst, $Array, 1);
        return $MovieLijst;

    }
}