<?php session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>

<?php require 'menu-bar.php';?>
<body>
    <!-- Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password)
DB is skillsprojet3
Table trips -->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "https---github.com-sdoull-project1", );
    // check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>

        
    </body>