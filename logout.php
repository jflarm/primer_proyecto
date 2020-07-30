<?php 
    session_start();
    session_unset();
    session_destroy();
    if(!isset($_SESSION['user'])){
        header('Location: http://192.168.122.215/primer_proyecto/');
    }
    
        
?>

