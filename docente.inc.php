<div class="docente">
        <form id="form" action ="css.php" method="POST">
        <?php
        $ci=$_SESSION['ci'];
        
        ?>
        <h2>Elegir color de pantalla</h2>
            <input type="radio" id="css1" name="css" value="css1">
            <label for="css1">Verde</label><br>
            <input type="radio" id="css2" name="css" value="css2">
            <label for="css2">Azul</label><br>
            <input type="radio" id="css3" name="css" value="css3">
            <label for="css3">Naranja</label></br>
            <input type="submit" value="Aceptar"/>
        </form>
        <?php
    $ci=$_SESSION['ci'];
    
    $sql1="SELECT sigla from nota group by sigla order by sigla";
    $res1=mysqli_query($con,$sql1);
    
?>
<table id="tabla">
<tr>
	<td>Sigla</td>
	<td>CH</td>
	<td>LP</td>
    <td>CB</td>
    <td>OR</td>
    <td>PT</td>
    <td>TJ</td>
    <td>SC</td>
    <td>BE</td>
    <td>PA</td>

</tr>
<?php
$sql="SELECT sigla,depto, round(avg(prom),2) as prom from persona,(SELECT sigla,ci,notafinal as prom FROM nota) tmp where persona.ci=tmp.ci group by depto , sigla order by sigla,depto";
$res=mysqli_query($con,$sql);
$fila = mysqli_fetch_array($res);
while ($fila1 = mysqli_fetch_array($res1))
{
    echo "<tr>";
    echo "<td>".$fila1['sigla']."</td>";
    $cont=1;
    
    while($fila and $cont<=9){
        $sw=0;        
        while ($sw==0 and $cont<=9){
            if($fila1['sigla'] == $fila['sigla']){
                if($fila['depto']==$cont){
                    echo "<td>".$fila['prom']."</td>";
                    $sw=1; 
                    $fila = mysqli_fetch_array($res);   
                }
                else{
                    echo "<td> - </td>";    
                }
                $cont=$cont+1;
            }
            else{
                echo "<td> - </td>"; 
                $cont=$cont+1;   
            }
            
        }    
    }
    while(! $fila and $cont<=9){
        echo "<td> - </td>"; 
        $cont=$cont+1; 
    }    
    echo "</tr>";
}
?>
</table>
        
        <form id="form" action ="cerrar.php" method="POST">
            <input  id="btn" type="submit" value="Cerrar Sesion"/>
        </form>
        
        
    </div>