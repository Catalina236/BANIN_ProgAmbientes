<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="../../assets/img/logos/logoSena_2.png">
    <link rel="stylesheet" href="../../../assets/css/links/vacantes.css">
    
    <title>BANIN</title>
</head>
<body>
    <?php
        require '../../../app/config.php'; 
        require '../../../app/shareFolder/header.php';
    ?>
    <div class="contenedor">
        <div class="container">
            <h2>CREITERIOS DE EVALUACIÓN</h2>
            <div class="cards-container">
                <div class="card">
                    <p><strong>NOMBRE:</strong> FORMACIÓN PARA EL TRABAJO</p>
                    <a href="criteriosFormacionT.php"><button>VER..</button></a>
                    
                </div>
                <div class="card">
                    <p><strong>NOMBRE:</strong> EDUCACIÓN FORMAL</p>
                    <a href="criteriosEducacionF.php"><button>VER..</button></a>
                    
                </div>
                <div class="card">
                    <p><strong>NOMBRE:</strong> SER</p>
                    <a href="criteriosSER.PHP"><button>VER..</button></a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>
</body>
</html>