<?php

require '../Functions/Datalayer/AccountDatabase.php';
require '../Functions/Datalayer/AchievementDatabase.php';

class AccountController
{
    private $db;
    private $Adb;

    public function __construct()
    {
        $this->db = new AccountDatabase();
        $this->Adb = new AchievementDatabase();
    }

    public function SetAccount($Name, $Password, $email)
    {
    $this->db->AccountAanmaken($Name, $Password, $email);
    $this->SetAdchievement($email);
    }

    public function Login($Password, $email)
    {
        $this->db->userLogin($Password, $email);
    }

    public Function SetAdchievement($email)
    {
        $this->Adb->SetAllAdchievement($this->db->GetLastInsertedId($email));
    }

}