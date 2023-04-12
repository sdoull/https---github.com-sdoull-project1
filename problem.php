<?php include 'header.php'; ?>

<?php
  
// Initialize the session
session_start();
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$_SESSION['title'] = $title;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['role'] = $role;
           
?>


<?php
$_SESSION['title'] = $title;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['role'] = $role;

if ($_SESSION['role'] =="admin") {echo "<h2><a href='new-account.php'>New account</a><br><a href='isnt-working.php'>isnt-working</a>  </h2> ";
                }
        
                if ($_SESSION['role'] =="manager") {echo "<a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>isnt-working</a>   ";
                }
        
                if ($_SESSION['role'] =="ceo") {echo "<a href='need-help.php'>Need Help</a><br><a href='isnt-working.php'>isnt-working</a>  ";
                }

?>
<?php include 'footer.php'; ?>
