<?php

require '../Functions/Datalayer/AchievementDatabase.php';

class AchievementController
{
    private $db;

    public function __construct()
    {
        $this->db = new AchievementDatabase();
    }

    public Function SetAdchievement($Id)
    {
        $this->db->SetAllAdchievement($Id);
    }

}