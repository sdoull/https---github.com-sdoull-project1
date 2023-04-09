
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    <!-- Fontawesome 5-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>



<body class="trip">
    <header>
        <nav class="navbar"><!--top menu and navigation hamburger menu-->
            <!-- <div id="menu" class="menu"> -->
            <nav>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.html">Home</a>
                    <a href="#BookTrip">Book Trip</a>
                    <a href="supporthelp.html" class="btn" oneclick="closeNav">Admin Support</a>
                    <div class="smenu"> <!-- submenu with admin links -->
                        <a href="new-account.php">New Account</a>
                        <a href="lost-password.php">Lost Password</a>
                        <a href="isnt-work.php">Website Is not working</a>
                        <a href="send-email.php">send email</a>
                    </div>
                    <li class="item">
                        <a href="#" class="btn"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>
                </div>

                <!-- icon for hamburger menu -->
                <span onclick="openNav()"><img
                        src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt=""
                        width="60px"></span>
                <div><!-- top nav contents-->
                    <h2 class="middleText">Halifax Canoe and Kayak</h2>
                </div>
                <img class="topRightIcon" src="images/paddle-white.png" alt="" width="50">
            </nav>

        </nav>
    </header><footer>
    <div class="fbtn" id="fbtn">Contact Us at 
        <a href="Test@email.com">Test@email.com</a>
    </div>
</footer>