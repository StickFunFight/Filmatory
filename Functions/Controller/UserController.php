<?php

require '../Functions/Datalayer/UserDatabase.php';

class UserController
{
    private $db;

    public function __construct()
    {
        $this->db = new UserDatabase();
    }

    public function SetMovieLiking($UserId, $MovieId)
    {

        $this->db->SetMovieLiking($UserId, $MovieId);

    }

    public function GetMovieLiking($UserId)
    {

        $lijst = array();

        $lijst = $this->db->GetLikedMvovies($UserId);

        return $lijst;

    }
}