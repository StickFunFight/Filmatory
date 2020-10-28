<?php

require '../Functions/Datalayer/AchievementDatabase.php';

class AchievementController
{
    private $db;

    public function __construct()
    {
        $this->db = new AchievementDatabase();
    }

    public function SetAdchievement($Id)
    {
        $this->db->SetAllAdchievement($Id);

    }

    public function GetAllAchievements($Id)
    {
        $lijst = array();

        $lijst = $this->db->GetAllAchievementUser($Id);

        return $lijst;
    }

    public function InsertAchievment($genre, $UserID){

        if (in_array("Horror", $genre)) {
            $this->db->SetAchievement($UserID, 1);
        }
        if(in_array("Comedy", $genre)){
            $this->db->SetAchievement($UserID, 2);
        }
    }
}