<?php include 'header.php'; ?>

<?php
//   do you see what i did..applied what you showed me and applied it to another form and figured out how to link a page! YESSS!!!
 
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