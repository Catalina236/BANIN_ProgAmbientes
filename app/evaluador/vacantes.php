<?php
require_once '../../app/config.php';
requireRole(['2','3']);
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
        require '../../app/shareFolder/backButton.php';
    ?>
    <div class="contenedor">
        <div class="container">
            <h2>VACANTES ASIGNADAS</h2>
            <div class="cards-container">
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
<<<<<<< HEAD
                    <a href="./listaCandidatos.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button>VER..</button></a>
=======
                    <?php if($_SESSION['id_rol'] && $_SESSION['id_rol']=='3'):?>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <?php elseif($_SESSION['id_rol'] && $_SESSION['id_rol']=='2'):?>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
                    <?php endif;?>
                    
                </div>
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
                    
                </div>
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
                    
                </div>
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
                </div>
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
                </div>
                <div class="card">
                    <p><strong>Código:</strong> 30294</p>
                    <p><strong>Coordinación Inicial:</strong> Titulada</p>
                    <p><strong>Coordinación Final:</strong> Titulada</p>
                    <p><strong>Número de Aspirantes:</strong> 40</p>
                    <p><strong>Evaluados:</strong> 13</p>
                    <p><strong>Por Evaluar:</strong> 27</p>
                    <a href="listaCandidatos.php" class="butC"><button>VER..</button></a>
                    <a href="asignacionInstructor.php" class="butC"><button>Asignar..</button></a>
>>>>>>> d1eb4d57ad25d4ef9e20b7ea96a4c7ab1fb77c5b
                </div>
            </div>
        </div>
    </div>
    <?php
    require '../shareFolder/footer.php';
    ?>
</body>
</html>