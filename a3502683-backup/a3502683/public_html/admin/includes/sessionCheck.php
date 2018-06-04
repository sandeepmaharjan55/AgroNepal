<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(!$_SESSION['loggedin']){
echo "<script> alert ('you are not login'); </script>";
echo "<script>window.location='index.php';</script>";

} ?>
