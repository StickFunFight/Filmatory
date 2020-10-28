<?php

class AchievementDatabase
{
    private $conn;

    public function __construct()
    {
        require_once 'Database.php';
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function GetAllAchievement()
    {
        $lijst = array();
        $query = "SELECT * FROM Achievement";
        $stm = $this->conn->prepare($query);
        if ($stm->execute()) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($result as $item) {
                // Hier stonden de entiteit class functies maar hij wilde de database kolom namen
                $entAchievement = new EntAchievement($item->Id, $item->AchievementName, $item->AchievementDiscription, 0);
                array_push($lijst, $entAchievement);
            }
            return $lijst;

        } else {
            echo "oef foutje";
        }
    }

    public function GetAllAchievementUser($id)
    {
        $lijst = array();
        $query = "Select achievement.Id, achievement.AchievementName, achievement.AchievementDiscription, achievement_user.Done
        from achievement_user
        left JOIN achievement on achievement_user.AchievementId = achievement.Id
        where achievement_user.UserId = $id";
        $stm = $this->conn->prepare($query);
        if ($stm->execute()) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($result as $item) {
                // Hier stonden de entiteit class functies maar hij wilde de database kolom namen
                $entAchievement = new EntAchievement($item->Id, $item->AchievementName, $item->AchievementDiscription, $item->Done);
                array_push($lijst, $entAchievement);
            }
            return $lijst;

        } else {
            echo "oef foutje";
        }
    }

    public function SetAllAdchievement($Id)
    {
        $achievementList = $this->GetAllAchievement();
        foreach ($achievementList as $achievement) {
            // Getting the id's
            $achievementID = $achievement->getId();

            // Creating a query to insert a row in user_achievement for every achievement
            $query = "INSERT INTO achievement_user(AchievementiD, UserId) VALUES(?, ?)";
            $stm = $this->conn->prepare($query);
            $stm->bindParam(1, $achievementID);
            $stm->bindParam(2, $Id);
            $stm->execute();
            header('Location: Inloggen.php');
        }
    }
    public function SetAchievement($UserId, $AchievemnentId){
        try {
            $query = "UPDATE achievement_user SET Done =1 WHERE UserId = ? AND AchievementId = ?";
            $stm = $this->conn->prepare($query);
            $stm->bindParam(1, $UserId);
            $stm->bindParam(2, $AchievemnentId);
            $stm->execute();
        }catch (Exception $e){
            var_dump($e);
        }
    }
}
