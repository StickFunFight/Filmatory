<?php
session_start();
// Checking if user is logged in
if (isset($_SESSION["UserId"])) {
    // Filling the userID
    $UserID = $_SESSION["UserId"];

    echo $UserID;
} else {
    // Sending user to login page
    header("Location: Inloggen.php");
}