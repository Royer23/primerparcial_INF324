<?php
if (isset($_GET["Enviar"]))
{
$nombre=$_GET["nombre"];
echo "Hola estimado: ".$nombre;
}
else
{
echo "Usted presiono cancelar";	
}
?>