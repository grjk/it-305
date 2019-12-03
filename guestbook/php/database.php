<?php

// Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Start a session
session_start();

$navText = "Guestbook Form / Log out";
$navLink = "logout.php";


// If user is not logged in, reroute them to the login page
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

require('nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>
<body class="bg-light">
<div class="pt-4 pb-4 container bg-white mt-5 rounded shadow"">

    <h3 class="text-center"><u>Guestbook</u></h3>

    <?php
    require('/home/joshicgr/connect.php');
    //Define the query
    $sql = 'SELECT * FROM guest';
    //Send the query to the database
    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    ?>

    <table id="guest-table" class="display nowrap">
        <thead>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Company</th>
            <th>LinkedIn</th>
            <th>Email</th>
            <th>Comments</th>
            <th>Mail List</th>
            <th>Mail Format</th>
            <th>How We Met</th>
            <th>Other</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>

        <?php
        //Print the results
        while ($row = mysqli_fetch_assoc($result)) {
            $first = $row['firstName'];
            $last = $row['lastName'];
            $title = $row['title'];
            $company = $row['company'];
            $linkedin = $row['linkedin'];
            $email = $row['email'];
            $comments = $row['comments'];
            $maillist = $row['mailList'];
            $mailFormat = $row['mailFormat'];
            $howWeMet = $row['howWeMet'];
            $other = $row['other'];
            $date = $row['date'];
            echo "<tr>
                <td>$last, $first</td>
                <td>$title</td>
                <td>$company</td>
                <td>$linkedin</td>
                <td>$email</td>
                <td>$comments</td>
                <td>$maillist</td>
                <td>$mailFormat</td>
                <td>$howWeMet</td>
                <td>$other</td>
                <td>$date</td>
              </tr>";
        }
        ?>

        </tbody>
    </table>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<script>
    //$('#student-table').DataTable();

    $('#guest-table').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
</script>

</body>
</html>