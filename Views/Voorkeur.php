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

    <div class="flex-container" style="margin-top: 5%">
    <?php
    include '../functions/controller/MovieController.php';
    include '../functions/Models/EntMovie.php';
        $Movie = new MovieController();
        $MovieLijst = $Movie->GetRandomMovies();
        foreach($MovieLijst as $item) {
         $MovieName = $item->getTitle();
         $MovieGenre = $item->getGenres();

            if(strpos($MovieGenre, '|') !== false){
                $MovieWithoutL = str_replace("|",", ",$MovieGenre);
            }else{
                $MovieWithoutL = $MovieGenre;
            }

            echo '<div class="card" style="width: 18rem; margin-left: 2%; margin-bottom: 2%">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'. $MovieName. '</h5>';
            echo '<p class="card-text">'.$MovieWithoutL.'</p>';
            echo '<select name="cars" id="cars">';
            echo '</div>';
            echo '</div>';
            echo '</br>';
        }
        ?>
</div>









