<?php
include_once("connect.php"); 

if(isset($_SESSION['user_id'])) {

// if already logged in.

session_unset();

session_destroy();
header("Location: index.php");
}
?>