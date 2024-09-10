<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASE_URL; ?>assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/img/logos/logoSena_2.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/shareInFolder/headerFooter.css">
    <title>BANIN</title>
</head>
<body>
    <header>
        <a href="<?php echo BASE_URL; ?>index.php" class="logo-container">
            <img class="logo" src="<?php echo BASE_URL; ?>assets/img/logos/logo-sena-blanco.png" alt="">
        </a>
        <nav class="menu">
            <ul class="menu-principal" id="menu-principal">
                <li><a href="<?php echo BASE_URL; ?>app/evaluador/candidatos.php">Candidatos</a></li>
                <li><a href="<?php echo BASE_URL; ?>app/evaluador/vacantes.php">Vacantes</a></li>
                <li><a href="">Criterios</a></li>
                <li><a href="">Seleccionados</a></li>
                <li><a href="<?php echo BASE_URL; ?>app/evaluador/moduloConsulta.php">Consulta</a></li>
                
                <!-- Mostrar "Salir" si el usuario está logueado -->
                <?php if (isset($_SESSION['rol'])): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/shareFolder/salir.php">Salir</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        
        <!-- Si el usuario no está logueado, mostrar el botón de Iniciar Sesión -->
        <div class="actions">
            <?php if (!isset($_SESSION['rol'])): ?>
                <a href="<?php echo BASE_URL; ?>app/shareFolder/iniciarsesion.php" class="boton_ir">Iniciar sesión</a>
            <?php endif; ?>
            
            <!-- Botón del menú -->
            <button class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <script src="<?php echo BASE_URL; ?>assets/js/header.js"></script>
</body>
</html>
