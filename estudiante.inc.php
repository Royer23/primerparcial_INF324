<div class="estudiante">
        <form id="form" action ="css.php" method="POST">
        <?php
        $ci=$_SESSION['ci'];
        $sql="SELECT * FROM persona where ci=$ci";
        $res=mysqli_query($con,$sql);
        $dato = mysqli_fetch_array($res);
        $nom = $dato['nomcompleto'];
        ?>
        <h3>Estudiante: <?php echo $nom;?></h3>
        <h3>Elije el color que desees:</h3>
            <input type="radio" id="css1" name="css" value="css1">
            <label for="css1">Verde</label><br>
            <input type="radio" id="css2" name="css" value="css2">
            <label for="css2">Azul</label><br>
            <input type="radio" id="css3" name="css" value="css3">
            <label for="css3">Naranja</label></br>
            <input  id="btn" type="submit" value="Aceptar"/>
        </form>
        <form id="form" action ="notas.php" method="POST">
            <input  id="btn" type="submit" value="Ver Notas"/>
        </form>
        <form id="form" action ="cerrar.php" method="POST">
            <input  id="btn" type="submit" value="Cerrar Sesion"/>
        </form>
        
        
    </div>