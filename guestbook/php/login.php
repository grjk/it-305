<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start a session
session_start();

$invalidLogin = "";
$navText = "Guestbook Form";
$navLink = "../index.php";

// If the user is already logged in
if (isset($_SESSION['username'])) {
    header('location: database.php');
}

// Once the login form has been submitted
if (isset($_POST['submit'])) {

    // Include the file that contains the active credentials
    require('creds.php');


    // Get the username and password from the POST array
    $username = $_POST['username'];
    $password = $_POST['password'];


    // If the username and password are correct
    if(array_key_exists($username, $creds) && $creds["$username"] == $password) {

        if ($username == "josh") {
            // Store username in a session variable
            $_SESSION['username'] = $username;

            // Redirect to the database with valid credentials
            header('location: home.php');
        }
        else {
            // Store username in a session variable
            $_SESSION['username'] = $username;

            // Redirect to the database with valid credentials
            header('location: database.php');
        }
    }

    // Login credentials are incorrect
    $invalidLogin = "<p class='text-center table-danger rounded'>Invalid Login</p>";
}

include('nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">

    <title>Log In</title>
</head>
<body class="bg-light">
<form method="post" action="#" class="container bg-white mt-5 w-25 shadow justify-content-center rounded">
    <div class="text-center pt-4">
        <h3><u>Log In</u></h3>
    </div>

    <?php echo $invalidLogin ?>

    <!--Username input field-->
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control shadow-sm">
    </div>
    <br>

    <!--Password input field-->
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control shadow-sm">
    </div>
    <br>

    <!--Submit button-->
    <div class="text-center">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary shadow-sm">
    </div>
    <br>

    <!--HINT-->
    <p class="text-center pb-4">
        Username: admin<br>
        Password: @dm1n<br>
        (This will be removed)
    </p>
</form>
</body>
</html>
