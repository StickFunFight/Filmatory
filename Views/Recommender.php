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
require "Menu.php";
include '../Functions/Controller/RecommenderController.php';
include '../Functions/Controller/AchievementController.php';
include '../Functions/Models/EntRating.php';

$UserC = new RecommenderController();
$Achievement = new AchievementController();

$lijst = $UserC->GetLikedMovies($UserID);
//Haal alle films op die de gebruiker leuk vind.

$Genres = $UserC->GetLikedGenre($UserID);
//Haal alle genres op die de gebruiker leuk vind.

$VulbareLijst = array();
$UserRatings = $UserC->GetUserByMovie($lijst, $VulbareLijst);
//Haal alle users op die ook die film gezien hebben

$Userlist = array();
$TijdelijkeArray = array();
foreach ($UserRatings as $item) {
     $UserIds =$item->getUserId();
    array_push($Userlist, $UserIds);
}
//Maak een lijstje met alle ids van de users.
$MovieLijst = array();
$MovieLijst = $UserC->GetMoviesByUsers($Userlist, $TijdelijkeArray);
//Haal alle films op van de users.

$Lijsttje = array();

$result = array_intersect($MovieLijst, $Genres);
//Filter de lijst met films op genres.

var_dump(count($result));
shuffle($result);
//Gooi de lijst even lekker door elkaar.
$SixRandomArray = array_slice($result, 0, 6);
//pak 6 films uit de lijst.

//stuur genres door voor achievements.
$Achievement->InsertAchievment($Genres, $UserID);

?>
<form method="post">
    <div class="container">
        <div class="flex-container" style="margin-top: 5%">
            <?php
            foreach ($SixRandomArray as $item) {
                $MovieName = $item->getTitle();
                $MovieGenre = $item->getGenres();
                $Id = $item->getMovieId();

                if (strpos($MovieGenre, '|') !== false) {
                    $MovieWithoutL = str_replace("|", ", ", $MovieGenre);
                } else {
                    $MovieWithoutL = $MovieGenre;
                }
                echo '<div class="card" style="width: 18rem; margin-left: 2%; margin-bottom: 2%">';
                echo '<img class="card-img-top" src="../assests/images/Placeholder.png" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $MovieName . '</h5>';
                echo '<p class="card-text">' . $MovieWithoutL . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</br>';
            }
            ?>
            </div>
        </div>
</form>