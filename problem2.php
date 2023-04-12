<?php include 'header.php'; ?>

<?php
  
 
        $theissueFromForm = $_POST['theissue'];


        // You could echo out each one just show your work. Comment it out later
        echo "The role you have selected is: $theissueFromForm ";

        // Now because we have them as simple var with data, we can set them as session vars 
        $_SESSION["theissueFromForm "] = $theissueFromForm ;




?>


<br> <p> </p> <br> <p> 
<?php
if ($theissueFromForm  =="Newaccount") {

    echo'<meta http-equiv="refresh" content="1; URL=new-account.php"/>'
     ;
     
}
if ($theissueFromForm  =="Lostpassword") {

echo'<meta http-equiv="refresh" content="1; URL=lost-password.php"/>'
 ;
}

 

?>