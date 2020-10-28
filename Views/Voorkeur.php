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
?>
<form method="post">
    <div class="container">
        <div class="flex-container" style="margin-top: 5%">
            <?php
            include '../functions/controller/MovieController.php';
            include '../functions/Models/EntMovie.php';
            $Movie = new MovieController();
            $MovieLijst = $Movie->GetRandomMovies();
            foreach ($MovieLijst as $item) {
                $MovieName = $item->getTitle();
                $MovieGenre = $item->getGenres();
                $Id = $item->getMovieId();

                if (strpos($MovieGenre, '|') !== false) {
                    $MovieWithoutL = str_replace("|", ", ", $MovieGenre);
                } else {
                    $MovieWithoutL = $MovieGenre;
                }

                echo '<div class="card" style="width: 18rem; margin-left: 2%; margin-bottom: 2%">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $MovieName . '</h5>';
                echo '<p class="card-text">' . $MovieWithoutL . '</p>';
                echo '<input type="checkbox" name="check_list[]" value="' . $Id . '" />';
                echo ' Leuk';
                echo '</div>';
                echo '</div>';
                echo '</br>';
            }
            ?>

            <div class="card" style="width: 18rem; margin-left: 2%; margin-bottom: 2%;">
                <div class="card-body">
                    <h5 class="card-title">Verzenden</h5>
                    <p class="card-text">Druk hier om je voorkeur in tedienen.</p>
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>
<?php
include '../functions/controller/UserController.php';
$userC = new UserController();
if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $check) {
        $userC->SetMovieLiking($UserID, $check);
    }
}
?>








