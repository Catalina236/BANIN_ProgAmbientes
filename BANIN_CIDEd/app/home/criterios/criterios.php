<?php
    require '../../../app/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="assets/img/logos/logoSena_2.png">
    <link rel="stylesheet" href="../../../assets/css/links/criterios.css">
    
    <title>BANIN</title>
</head>
<body>
    <?php
        require '../../../app/shareFolder/header.php';
        require '../../../app/shareFolder/navbar.php';
    ?>
    <div class="contenedor">
        <section class="criterios-evaluacion">
            <h2>CRITERIOS DE EVALUACIÓN</h2>
            <div class="cards-container">
                <div class="card">
                    <img src="../../../assets/img/corporativas/portafolio.png" alt="">
                    <h3 class="card-title">FORMACIÓN PARA EL TRABAJO</h3>
                    <a href="criteriosFormacionT.php" class="card-button">VER MÁS</a>
                </div>
                <div class="card">
                    <img src="../../../assets/img/corporativas/libro-de-lectura.png" alt="">
                    <h3 class="card-title">EDUCACIÓN FORMAL</h3>
                    <a href="criteriosEducacionF.php" class="card-button">VER MÁS</a>
                </div>
                <div class="card">
                    <img src="../../../assets/img/corporativas/complementario.png" alt="">
                    <h3 class="card-title">SER</h3>
                    <a href="criteriosSER.PHP" class="card-button">VER MÁS</a>
                </div>
            </div>
        </section>
    </div>
    <?php 
    require '../../shareFolder/footer.php';
    ?>
</body>
</html>