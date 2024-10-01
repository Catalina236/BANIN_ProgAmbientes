<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['2']);
$result1 = new Trabajo();
$datos1 = $result1->obtenerCodigo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="../../assets/img/logos/logoSena_2.png">
    <link rel="stylesheet" href="../../assets/css/links/vacantes.css">
    
    <title>BANIN</title>
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
    ?>
    <div class="contenedor">
        <div class="container">
            <h2>VACANTES ASIGNADAS</h2>
            <div class="cards-container">
            <?php foreach($datos1 as $row){ ?>
                <div class="card">
                    <p><strong>Código:</strong> <?php echo $row['cod_vacante']; ?></p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    
                    <!-- Formulario para asignar el instructor -->
                    <a href="./asignacionInstructor.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button>Asignar</button></a>
                    
                    <a href="../evaluador/listaCantidatos.php?cod_vacante=<?php echo $row['cod_vacante']; ?>">
                        <button>VER..</button>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <?php 
    require '../shareFolder/footer.php';
    ?>
</body>
</html>
