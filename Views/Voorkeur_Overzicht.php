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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<div class="container" style="margin-top: 10%">
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>Title</th>
            <th>Genre</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../functions/controller/UserController.php';
        include '../functions/Models/EntMovie.php';
        $UserC = new UserController();
        $lijst = $UserC->GetMovieLiking($UserID);

        foreach ($lijst as $item) {
            $MovieGenre = $item->getGenres();
            if (strpos($MovieGenre, '|') !== false) {
                $MovieWithoutL = str_replace("|", ", ", $MovieGenre);
            } else {
                $MovieWithoutL = $MovieGenre;
            }
            echo ' <tr>';
            echo '  <td>' . $item->getTitle() . '</td>';
            echo '   <td>' . $MovieWithoutL . '</td>';
            echo '  </tr>';
        }
        ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
