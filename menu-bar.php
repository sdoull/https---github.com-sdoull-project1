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



<body class="trip">
    <header>
        <nav class="navbar"><!--top menu and navigation hamburger menu-->
            <!-- <div id="menu" class="menu"> -->
            <nav>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="oldindex.html">Home</a>
                    <a href="#BookTrip">Book Trip</a>
                    <a href="index.php" class="btn" oneclick="openNav">Admin Support</a>
                                     <li class="item">
                        <a href="logout.php" class="btn"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>
                </div>
                <!-- icon for hamburger menu -->
                <span onclick="openNav()"><img
                        src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt=""
                        width="60px"></span>
                <div><!-- top nav contents-->
                    <h2 class="middleText">Halifax Canoe and Kayak</h2>
                </div>
                <!-- <?php echo  "User:<br>" . $_SESSION["username_DB"];   ?>  -->
                <img class="topRightIcon" src="images/paddle-white.png" alt="" width="50">
            </nav>

        </nav>
    </header>
<?php include 'connection.php'; ?>
    
