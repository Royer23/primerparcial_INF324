<?php
session_start();
include "conexion.php";
include "conexion2.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario= $_POST['usuario'];
    $ci= $_POST['ci'];
    $password= $_POST['password'];
    $sql="SELECT * FROM usuario where usuario='$usuario' and password='$password' and ci='$ci'";
    $statement = $conexion->prepare($sql);
    $statement->execute();
    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['ci'] = $ci;
        $_SESSION['usuario'] = $usuario;
        $res=mysqli_query($con,$sql);
        $dato = mysqli_fetch_array($res);
        $_SESSION['css'] = $dato["css"];
        $_SESSION['pagina']= $dato["tipo"];
        header('location: index.php');
    }else{
        $_SESSION['error'] = '<i>Datos incorrectos</i>';
        header('location: index.php');
        
    }
}
?>