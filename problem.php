<?php include 'header.php'; ?>

<?php
  
 
        $titleFromForm = $_POST['theTitle'];
        $firstNameFromForm = $_POST['firstName'];
        $lastNameFromForm = $_POST['lastName'];
        $theRoleFromForm = $_POST['theRole'];

   
        echo "The role you have selected is: $theRoleFromForm";


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
                <a href='isnt-working.php'>Isnt-working</a>
                </h2> 
                <br>
                <a href='admin-add.php'>Add Travel</a>
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
