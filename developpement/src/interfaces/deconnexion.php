<?php require('acces.php'); ?>
<?php
    // session_start();
    session_destroy();
    header('location:login.php');
?>