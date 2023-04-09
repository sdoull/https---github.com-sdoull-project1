<?php
ob_start();
session_start();
?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    <!--  Fontawesome 5 -->
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
    </header>
    </div> <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
        
      </body>
      <footer>
    <div class="fbtn" id="fbtn">Contact Us at 
        <a href="Test@email.com">Test@email.com</a>
</footer> -->