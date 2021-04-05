<?php
    $ci=$_SESSION['ci'];
    $sql="SELECT * from nota where ci=$ci";
    $res=mysqli_query($con,$sql);
    
?>
<div class="estudiante">
</br>
<h3>Tus notas:</h3>
<table id="tabla">
<tr>
	<td>Sigla</td>
	<td>Nota 1</td>
	<td>Nota 2</td>
	<td>Nota 3</td>
	<td>Nota Final</td>
</tr>
<?php
while ($fila = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$fila['sigla']."</td>";
echo "<td>".$fila["nota1"]."</td>";
echo "<td>".$fila["nota2"]."</td>";
echo "<td>".$fila["nota3"]."</td>";
echo "<td>".$fila["notafinal"]."</td>";
echo "</tr>";
}
?>
</table>
<form id="form" action ="atrase.php" method="POST">
    <input id="btn" type="submit" value="Atras"/>
</form>
</div>