<?php
session_start();
include "../conexion.php";
include "../cabecera1.inc.php";

if(isset($_SESSION['usuario'])){
    
    $css=$_SESSION['css'];
}else{
    $css="css1";
}
$ref="../css/$css.inc.css";

?>
<link rel="stylesheet" type="text/css" href="<?php echo $ref?>">
<?php

include "cabecera2.inc.php";
include "menu.inc.php";
if(isset($_SESSION['usuario'])){
    $pag=$_SESSION['pagina'];
    
    if($pag=="estudiante"){
        include "../estudiante.inc.php";
    }else{
        if($pag=="docente"){
            include "../docente.inc.php";
        }
        else{
            include "../notas.inc.php";
        }
    }
    
}
else{
    include "../ingresar.inc.php";
}
include "pie.inc.php";
?>

