<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASE_URL; ?>assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>BANIN</title>
</head>
<body>
    <div class="navbar">
    <?php if (isset($_SESSION['id_rol'])): ?>
            <h2 class="indicadorRol">
                <?php 
                    switch ($_SESSION['id_rol']) {
                        case '2':
                            echo "Coordinador";
                            break;
                        case '3':
                            echo "Evaluador";
                            break;
                        case '1':
                            echo "Administrador";
                            break;
                        default:
                            echo "";
                    }
                ?>
            </h2>
        <?php endif; ?>
        <nav class="menu">
            <ul class="menu-principal" id="menu-principal">
            <li><a href="<?php echo BASE_URL; ?>app/home/criterios/criterios.php">Criterios</a></li>
            <!-- <li><a href="<?php echo BASE_URL; ?>app/home/consultarEstadoBanin.php">Estado BANIN</a></li> -->
                <?php if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == '3'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/vacantes.php">Vacantes</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/candidatos.php">Candidatos</a></li>
                    <li><a href="<?php echo BASE_URL; ?>app/evaluador/moduloConsulta.php">Consulta</a></li>
                   
                <?php elseif (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == '1'): ?>
                    <li><a href="<?php echo BASE_URL; ?>app/administrador/panelControl.php">Panel de control</a></li>
               
                <?php elseif (isset($_SESSION['id_rol']) && $_SESSION['id_rol']== '2'): ?>
                    <li><a href="<?php echo BASE_URL;?>app/coordinador/vacantes.php">Asignar evaluador</a></li>
                    <li><a href="<?php echo BASE_URL;?>app/coordinador/candidatos.php">Candidatos</a></li>
                <?php endif;?>
            </nav>
            <div class="actions">
            <?php if(isset($_SESSION['id_rol'])):?>
                <a href="<?php echo BASE_URL; ?>app/shareFolder/salir.php" class="boton_ir" onclick="return salir()">Cerrar sesion</a>
            <?php else: ?>
                <a href="<?php echo BASE_URL; ?>app/home/iniciarsesion.php" class="boton_ir">Iniciar sesión</a>
            <?php endif; ?>
            <button class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>assets/js/header.js"></script>
</body>
</html>
<script>
    function salir(){
        var respuesta=confirm("¿Seguro desea salir?");
        if(respuesta==true){
            return true;
        }
        else{
            return false;
        }
    }
</script>
