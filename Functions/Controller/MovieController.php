<?php

require '../Functions/Datalayer/MovieDatabase.php';

class MovieController
{
    private $db;

    public function __construct()
    {
        $this->db = new MovieDatabase();
    }

    public function GetRandomMovies()
    {
        $lijst = array();

        $lijst = $this->db->GetRandomMovies();

        return $lijst;
    }

}