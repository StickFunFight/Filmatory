<?php

require '../Functions/Datalayer/RatingDatabase.php';

class RatingController
{
    private $db;

    public function __construct()
    {
        $this->db = new RatingDatabase();
    }

    public function GetUser($Ids, $UserLijst, $Counter = 0)
    {
        $lijst = array();
        $lijst = $this->db->GetUserbyMovie($Ids, $UserLijst, $Counter);
        return $lijst;
    }
    public function GetMovie($UserLijst, $Array, $Counter = 0)
    {
            $lijst = array();
            $lijst = $this->db->GetMovieByUser($UserLijst, $Array, $Counter);
            return $lijst;
        }
}