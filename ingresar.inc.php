    <?php
        if(isset($_SESSION['error'])){
            $error=$_SESSION['error'];
        }
    ?>
    <div class="ingresar">
        <form id="form" action ="ingresar.php" method="POST">
        <label>CI:</label> 
        <input type="text" name="ci" value="" required/><br>
        <label>Usuario:</label> 
        <input type="text" name="usuario" value="" required/><br>
        <Label>Password:</label> 
        <input type="password" name="password" value="" required/><br>
        <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
        <input id="btn" type="submit" value="Ingresar"/>
        </form>
        
    </div>