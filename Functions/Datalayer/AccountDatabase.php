<?php

class AccountDatabase
{
    private $conn;

    public function __construct()
    {
        require_once 'Database.php';
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function AccountAanmaken($UserName, $UserPassword, $userEmail)
    {
        $query = "INSERT INTO user (Name, Password,Email) VALUES (?,?,?)";
        $stm = $this->conn->prepare($query);
        $stm->bindParam(1, $UserName);
        $stm->bindParam(2, $UserPassword);
        $stm->bindParam(3, $userEmail);
        if ($stm->execute()) {
            //header('Location: Inloggen.php');
        } else {
            echo "Ging iets fout";
        }
    }

    public function userLogin($Password, $UserEmail)
    {
        $query = "SELECT Id FROM user WHERE Password = ? and Email = ?";
        $stm = $this->conn->prepare($query);
        $stm->bindParam(1, $Password);
        $stm->bindParam(2, $UserEmail);
        if ($stm->execute()) {
            $result = $stm->fetch(PDO::FETCH_OBJ);
            $UserID = $result->Id;

            session_start();
            $_SESSION["UserId"] = $UserID;
            header('Location: Overzicht.php');

            //TODO Melding voor fout wachtwoord.
        } else {
            echo "Wachtwoord of de naam is fout.";
        }
    }

    public function GetLastInsertedId($Email)
    {
        $query = "SELECT Id FROM user WHERE email = ?";
        $stm = $this->conn->prepare($query);
        $stm->bindParam(1, $Email);
        if ($stm->execute()) {
            $result = $stm->fetch(PDO::FETCH_OBJ);
            $id = $result->Id;
            return $id;
        }
    }

}