<?php 
    require('database.php');
    require('verification.php');

    $array = [];

    $verification = new Verification();
    $verification->email($_GET['email']);

    echo $verification->getIndexError(0);
    

    $db = new Database();
    $db->connectDb();
?>