<?php include 'header.php'; ?>

<?php
 
        $theissueFromForm = $_POST['theissue'];


        echo "The role you have selected is: $theissueFromForm ";

  
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