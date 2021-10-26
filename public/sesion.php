<?php 
require '../includes/app.php';
incluirTemplate('header', $registro = true);

?> 

<body>

    <main>
        <section class="registro">
            <div class="titulo">
                <h1>Ingresar</h1>
            </div>

            <form action="admin.php" class="box" onsubmit="return validar();">
                <input type="text" id="mail" name="mail" placeholder="Mail" required>
                <input type="password" id="psw" name="contraseña" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="submit" name="" value="Ingresar">
                <p class="registrate"> ¿Ya tienes una cuenta? <a class="link" href="registarse.php">Registrarse</a></p>
                <div id="mensaje">
                    <p>La contraseña debe tener:</p>
                    <p id="letter" class="invalid">Una letra <b>minuscula</b></p>
                    <p id="capital" class="invalid">Una letra <b>mayuscula</b></p>
                    <p id="length" class="invalid">Minimo <b>8 caracteres</b></p>
                    <p id="number" class="invalid">Minimo un <b>numero</b></p>
                </div>
            </form>
        </section>	
    </main>	
<?php 
incluirTemplate('footer'); ?> 

