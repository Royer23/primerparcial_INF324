<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['pagina']= "notas";
        header('location: index.php');
    }
?>