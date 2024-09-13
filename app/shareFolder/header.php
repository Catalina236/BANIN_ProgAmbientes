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
            <li><a href="<?php echo BASE_URL; ?>app/home/criterios/criterios.php">Criterios</a></li>
            <li><a href="<?php echo BASE_URL; ?>app/home/cunsultarEstadoBanin.php">Estado BANIN</a></li>

            <?php if (isset($_SESSION['rol'])): ?>
                <?php if ($_SESSION['rol'] == 'Evaluador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/vacantes.php">Vacantes</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/candidatos.php">Candidatos</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/moduloConsulta.php">Consulta</a></li>
                <?php endif; ?>

                <?php if ($_SESSION['rol'] == 'Administrador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/administrador/usuario.php">Gestionar Usuarios</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/administrador/agregarUsuario.php">Agregar Usuario</a></li>
                <?php endif; ?>

                <?php if ($_SESSION['rol'] == 'Coordinador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/coordinador/planificaciones.php">Planificaciones</a></li>
                <?php elseif ($_SESSION['rol'] == 'Instructor Evaluador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/evaluaciones.php">Evaluaciones</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>

        </nav>

        <div class="actions">
            <?php if (isset($_SESSION['rol'])): ?>
                
                <a href="<?php echo BASE_URL; ?>app/shareFolder/salir.php" class="boton_ir">Salir</a>
            <?php else: ?>
                
                <a href="<?php echo BASE_URL; ?>app/home/iniciarsesion.php" class="boton_ir">Iniciar sesión</a>
            <?php endif; ?>

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
