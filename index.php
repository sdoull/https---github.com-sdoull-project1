
<?php
 session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true
 && isset($_SESSION["run"]) && $_SESSION["run"] === true
) {    
    //echo '<pre>';
    //var_dump($_SESSION);
    //echo '</pre>';
    //echo '<pre>';
    //var_dump($_POST);
    //echo '</pre>';
    header("problem.php");
    exit;
}
else {
    session_destroy();
header("login.php");
}

?>






<details>
    <summary>$_POST</summary>
    <p class="username_black">
        <?php  //var_dump($_POST); 
            echo "<h3> PHP List All POST Variables</h3>";
            foreach ($_POST as $key=>$val)
                {
                echo $key.' = <i>'.$val."</i><br>\n";
                }
        ?>
    </p>
</details>

<details>
    <summary>$_SESSION</summary>
    <p class="username_black">
        <?php
            echo "<h3> PHP List All Session Variables</h3>";
            foreach ($_SESSION as $key=>$val)
                {
                echo $key.' = <i>'.$val."</i><br>\n";
                }
        ?>
    </p>
</details>

<details>
    <summary>$_COOKIES</summary>
    <p class="username_black">
        <?php
            echo "<h3> PHP List All Cookies Variables</h3>";
            foreach ($_COOKIE as $key=>$val)
                {
                echo $key.' = <i>'.$val."</i><br>\n";
                }
        ?>
    </p>
</details>

<details>
    <summary>LOCALSTORAGE</summary>
    <p class="username_black">
        <h3> PHP List All local storage Variables</h3>
            <!-- echo "";
            foreach ($localStorage as $key=>$val)
                {
               echo $key.' is '.$val."<br>\n";
               } -->
<div id ="local_storage"></div>
            <script>
            paired ="";
            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                const value = localStorage.getItem(key);
                let paired = i +" "+ key + " = <i>"+value +"</i><br>";
                document.getElementById("local_storage").innerHTML = document.getElementById("local_storage").innerHTML + paired;
                console.log({key, value})
            }
            </script>
    </p>
</details>



<?php   $_SESSION['title'] = $title;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['role'] = $role;
       
          // we set emailType depending on the returned session role.
          if ($_SESSION['role'] =="admin") {$_SESSION['emailType'] ="newAccount";
            header("location: problem.php");
        }

        if ($_SESSION['role'] =="manager") {$_SESSION['emailType'] ="lostPassword";
            header("location: problem.php");
        }

        if ($_SESSION['role'] =="ceo") {$_SESSION['emailType'] ="Needs help";
            header("location: problem.php");
        }
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
    <!-- Fontawesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>

<?php require 'menu-bar.php';?>
<body>



    <div>
        <a href="logout.php" class="rightSide paddingRightOnly">Logout</a>

    </div>

    <div id="welcomeBox" class="welcomeBox">

        <h1 class="middleText2">Welcome to you IT Support System</h1>
        <br>

        <form action="problem.php" method="POST">

            <div class="whiteBg leftSide">
                <select title="theTitle" class="firstFormField inARow">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Dr">Dr</option>
                    <option value="Mx">Mx</option>
                </select>

                <input title="firstName" type="text" class="inARow" placeholder="First Name">

                <input title="lastName" type="text" class="inARow" placeholder="Last Name">

                <select title="role" class="inARow">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
            </div>

            <input type="submit" name="submit" value="Submit" class="lastFormField blueButton">


        </form>


        <br>


    </div>
</body>
<?php include 'footer.php'; ?>