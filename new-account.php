<?php include 'header.php'; ?>

<h2>Email sent to Customer support for New Account</h2>

<img src="images/emailsent.gif" alt="">

<h3>An email as been sent,
    
Watch for reply in inbox in the next 48 hours.</h3>

<?php

$firstName =  $_SESSION["firstNameSess"];
  echo "Thank you $firstName. You may logout now";

?>


<a href="logout.php">Log out/a>




<?php include 'footer.php'; ?>
