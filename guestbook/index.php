<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$navText = "Admin?";
$navLink = "php/login.php";
require('php/nav.php');

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">

    <title>Guestbook</title>

    <!-- Favicon -->
</head>
<body class="bg-light pb-5">

<div class="container bg-white mt-5 w-50 rounded shadow" id="main">

    <form id="guestbook-form" action="php/confirmation.php" method="post">
        <fieldset class="form-group">
            <h3 class="pt-4 text-center"><u>Guestbook Sign Up</u></h3>
            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" class="form-control shadow-sm" id="firstName" name="firstName" placeholder="e.g. John">
                <span class="err" id="err-fname">Please enter a first name</span>
            </div>

            <div class="form-group">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control shadow-sm" id="lastName" name="lastName" placeholder="e.g. Doe">
                <span class="err" id="err-lname">Please enter a last name</span>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control shadow-sm" id="title" name="title" placeholder="e.g. C.E.O.">
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control shadow-sm" id="company" name="company" placeholder="e.g. Microsoft">
            </div>

            <div class="form-group">
                <label for="lin">LinkedIn URL</label>
                <input type="text" class="form-control shadow-sm" id="lin" name="lin" placeholder="Website URL">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control shadow-sm" id="email" name="email" placeholder="e.g. JohnDoe@gmail.com">
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="form-group">
                <label for="comments">Comments?</label>
                <textarea class="form-control shadow-sm" id="comments" name="comments" rows="3"></textarea>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="maillist" id="maillist" name="maillist" checked>
                <label class="form-check-label" for="maillist">
                    Include me in your mailing list
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Choose an email format</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="htmlradio" name="mailFormat" value="HTML">
                <label class="form-check-label" for="htmlradio">
                    HTML
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="textradio" name="mailFormat" value="Text">
                <label class="form-check-label" for="textradio">
                    Text
                </label>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <legend>How did we meet?</legend>
            <div class="form-group shadow-sm">
                <label for="meet">Select an option</label>
                <select class="form-control" id="meet" name="meet">
                    <option value="none">Select</option>
                    <option value="family">Family</option>
                    <option value="friend">Friend/s</option>
                    <option value="event">Event</option>
                    <option value="work">Work</option>
                    <option value="school">School</option>
                    <option value="other">Other</option>
                </select>
                <span class="err" id="err-meet">You must choose a listed option</span>
            </div>
            <div class="form-group shadow-sm">
                <label for="others">Other (Please specify)?</label>
                <textarea class="form-control" id="others" name="other" rows="3"></textarea>
            </div>
        </fieldset>

        <div class="text-center pb-4">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary shadow-sm">
        </div>
    </form>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>