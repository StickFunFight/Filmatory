<?php
session_start();
// Checking if user is logged in
if (isset($_SESSION["UserId"])) {
    // Filling the userID
    $UserID = $_SESSION["UserId"];
} else {
    // Sending user to login page
    header("Location: Inloggen.php");
}
require "Menu.html";

?>

<div class="container" style="margin-top: 10%">
    <?php
    include '../functions/controller/AchievementController.php';
    include '../functions/Models/EntAchievement.php';
    $AchievementController = new AchievementController();
   $Achievements = $AchievementController->GetAllAchievements($UserID);

    foreach($Achievements as $item){
        $id = $item->getId();
        $AchievementName = $item->getAchievementName();
        $AchievementDesc = $item->getAchievementDiscription();

        echo '<table class="border border-danger" style="width: 100%; background-color: #a9aea9">';
        echo '<tr>';
        echo '<td>';
        echo '<b>'. $AchievementName = $item->getAchievementName() . '</b>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo    $AchievementDesc = $item->getAchievementDiscription();
        echo '</td>';
        echo '</tr>';
        echo '</table>';
        echo '</br>';
    }
    ?>
</div>