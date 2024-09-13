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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

<<<<<<< HEAD
                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Instructor evaluador'): ?>
=======
                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Evaluador'): ?>
>>>>>>> ec0220dc382b9314b51035dfd358219a5c9c0c3c
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/vacantes.php">Vacantes</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/candidatos.php">Candidatos</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/moduloConsulta.php">Consulta</a></li>
                    <!-- <li><a href="<?php echo BASE_URL; ?>app/evaluador/evaluaciones.php">Evaluaciones</a></li> -->

                <?php elseif (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Administrador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/administrador/usuario.php">Gestionar Usuarios</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/administrador/agregarUsuario.php">Agregar Usuario</a></li>
                
                <?php elseif (isset($_SESSION['rol']) &&$_SESSION['rol']== 'Coordinador'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/coordinador/planificaciones.php">Planificaciones</a></li>
            </ul>
                <?php endif;?>
            </nav>

            <div class="actions">
            <?php if(isset($_SESSION['rol'])):?>
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
