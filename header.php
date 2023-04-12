<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if ( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true
) {
  header("login.php"); //or where ever your login resides
    exit;
} ?>