<?php

require '../Functions/Datalayer/AccountDatabase.php';

class AccountController
{
    private $db;

    public function __construct()
    {
        $this->db = new AccountDatabase();
    }

    public function SetAccount($Name, $Password, $email)
    {

    $this->db->AccountAanmaken($Name, $Password, $email);

    }

    public function Login($Password, $email)
    {

        $this->db->userLogin($Password, $email);

    }

}