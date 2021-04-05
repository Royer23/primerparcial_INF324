<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['pagina']= "estudiante";
        header('location: index.php');
    }
?>