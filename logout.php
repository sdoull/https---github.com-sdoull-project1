<?php include 'header.php'; ?>


<?php
session_unset();

session_destroy();

echo " You are now logged out!"
?>
<br>
<br>

<?php include 'footer.php'; ?>
