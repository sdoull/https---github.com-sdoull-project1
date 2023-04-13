<?php include 'header.php'; ?>

<?php
  
 
        $titleFromForm = $_POST['theTitle'];
        $firstNameFromForm = $_POST['firstName'];
        $lastNameFromForm = $_POST['lastName'];
        $theRoleFromForm = $_POST['theRole'];

        // You could echo out each one just show your work. Comment it out later
        echo "The role you have selected is: $theRoleFromForm";

        // Now because we have them as simple var with data, we can set them as session vars 
        $_SESSION["firstNameSess"] = $firstNameFromForm;
        $_SESSION["lastNameSess"] = $lastNameFromForm;
        $_SESSION["theRoleFromForm"] = $lastNameFromForm;



?>


<br> <p> </p> <br> <p> 


<?php



        if ($theRoleFromForm =="Admin") {

               echo "<h2 class= list>
                Select option
                <br>
                <a href='send-email.php'>New account</a>
                <br>
                <a href='isnt-working.php'>isnt-working</a>
                </h2> 
                ";
        }
        
        if ($theRoleFromForm =="Manager") {
                echo "<h2 class=list>
                Select option
                <br>
                <a href='send-email.php'>Lost password</a>
                <br>
                <a href='isnt-working.php'>isnt-working</a>  
                </h2>
                 ";
        }
        
        if ($theRoleFromForm =="CEO") {
                echo "<h2 class=list>
                Select option
                <br>
                <a href='need-help.php'>Need Help</a>
                <br>
                <a href='isnt-working.php'>isnt-working</a> 
                </h2>
                 ";
                }

?>
<?php include 'footer.php'; ?>
