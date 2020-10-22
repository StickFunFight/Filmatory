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
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Achievements</h5>
                    <p class="card-text">
                        Klik hier om al je achievements te bekijken.
                    </p>
                    <a href="Achievements.php" class="btn btn-primary">Achievements</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Geef je voorkeur op.</h5>
                    <p class="card-text">
                        Klik hier om je voorkeur op tegeven kwa films.
                    </p>
                    <a href="Voorkeur.php" class="btn btn-primary">Voorkeur</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 3%">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bekijk je voorkeur.</h5>
                    <p class="card-text">
                        Klik hier om je voorkeur te bekijken.
                    </p>
                    <a href="Voorkeur_Overzicht.php" class="btn btn-primary">Voorkeur bekijken</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bekijk je ML.</h5>
                    <p class="card-text">
                        Hier kun je een aanbeveling kwa film krijgen.
                    </p>
                    <a href="Recommender.php" class="btn btn-primary">Aanbeveling</a>
                </div>
            </div>
        </div>
    </div>
</div>






