<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filmatory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- all meta tags -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../Index.php"">Filmatory</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Registeren.php">Registeren <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Inloggen.php">Inloggen <span class="sr-only">(current)</span></a>
            </li>
    </div>
</nav>
</header>
<div class="container" style="margin-top: 3%">

<form method="POST">
    <div class="form-group">
        <label for="Name">Naam</label>
        <input type="Text" class="form-control" name="TxtName" placeholder="Naam">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="TxtPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="TxtEmail" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <input type="submit" id="SubmitButton" name="SubmitButton" value="Versturen" class="btn btn-primary">
</form>
    <!-- Content here -->


    <?php
    include '../functions/controller/AccountController.php';
    include '../functions/Models/EntAchievement.php';
    $UserController = new AccountController();
//TODO STYLING.
    if(isset($_POST['SubmitButton'])){
        $UserName = $_POST['TxtName'];
        $UserPassword = $_POST['TxtPassword'];
        $UserEmail = $_POST['TxtEmail'];

        $UserController->SetAccount($UserName, $UserPassword, $UserEmail);
    }
    ?>

</div>
</body>
</html>