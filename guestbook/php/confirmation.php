<?php

    require('/home/joshicgr/connect.php');

    $isset = true;

    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $title = $_POST['title'];
    $company = $_POST['company'];
    $linkedin = $_POST['lin'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $mail = $_POST['maillist'];
    $mailFormat = $_POST['mailFormat'];
    $howWeMet = $_POST['meet'];
    $other = $_POST['other'];

    if(empty($first)) {
        echo '<p><span style="color: red">First Name:</span> You forgot to enter your first name!</p>';
        $isset = false;
    }
    else {
        echo "<p>First Name: $first</p>";
    }

    if(empty($last)) {
        echo '<p><span style="color: red">Last Name:</span> You forgot to enter your last name!</p>';
        $isset = false;
    }
    else {
        echo "<p>Last Name: $last</p>";
    }

    if(!(empty($email))) {
        if(!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            echo '<p><span style="color: red">Email:</span> Your email is not valid!</p>';
            $isset = false;
        }
        else {
            echo "<p>Email: $email</p>";
        }
    }

    if($mail && empty($email)) {
        echo '<p><span style="color: red">Email:</span> You must provide an email to be on the mailing list!</p>';
        $isset = false;
    }

    if(!(empty($linkedin))) {
        if(!(filter_var($linkedin, FILTER_VALIDATE_URL))) {
            echo '<p><span style="color: red">LinkedIn:</span> LinkedIn address not valid!</p>';
            $isset = false;
        }
        else {
            echo "<p>LinkedIn: $linkedin</p>";
        }
    }

    if(isset($meet)) {
        if($meet == "family" || $meet == "friend" || $meet == "event" || $meet == "work" || $meet == "school" || $meet == "other") {
            echo "<p>How we met: $meet</p>";
        }
        else {
            echo '<p><span style="color: red">How we met:</span> Something\'s not right here... Choose one of the listed options!</p>';
            $isset = false;
        }
    }

    if ($mail) {
        $mail = 1;
    }

    if ($isset) {
        echo "<br>Test 1</br>";
        $sql = "INSERT INTO guest VALUES (default, '$first', '$last', '$title', '$company', '$linkedin', '$email', '$comments', '$mail', '$mailFormat', '$howWeMet', '$other', NOW())";
        //echo "<br>$sql<br>";
        echo "<br>Test 2</br>";
        $result = mysqli_query($cnxn, $sql);
        echo "<br>Test 3</br>";
    }