<?php 
require '../includes/app.php';
incluirTemplate('header');
?> 


<body>
    <header class="header__flex">
        <div class="usuario">
            <h2>Bienvenido: Andres </h2>
        </div>

        <div class="salir">
            <a href="sesion.php"><i class="uil uil-signout"></i></a>
            
        </div>
    </header>
    <main>
        <section class="funciones">
            <div class="botones">
                <div class="registrar">
                    <a href="retiro.php">Retirar</a>
                </div>

                <div class="transfer">
                    <a href="transferencia.php">Transferir</a>
                </div>
            </div>
        </section>

        <section class="balance">
            <h3>Balance</h3>
        </section>
    </main>
<?php incluirTemplate('footer'); ?> 