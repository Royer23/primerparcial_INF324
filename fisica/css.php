<?php
session_start();
include "conexion.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $css=$_POST['css'];
    $ci=$_SESSION['ci'];
    if(isset($css)){
        $sql="UPDATE usuario SET css = '$css' WHERE ci = $ci";
        $_SESSION['css']=$css;
    }
    mysqli_query($con,$sql);
    header('location: index.php');
}
?>
