<?php 
session_start();
session_destroy(); // remove sid_login from server storage
header('location: login.php');
 exit;
?>