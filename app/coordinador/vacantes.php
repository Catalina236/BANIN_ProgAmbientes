<?php
require_once '../../app/config.php';
requireRole(['2']);
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
    <style>
        #mostrarFormulario {
    font-size: 1.5rem;
    background-color: #671C34;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    margin: 10px 0;
}

#formulario {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 5px;
    background-color: #f9f9f9;
}

#formulario label {
    margin-top: 10px;
    display: block;
}

#formulario input[type="text"], 
#formulario input[type="number"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
}

#formulario input[type="submit"], 
#cancelarFormulario {
    background-color: #671C34;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>
    <div class="contenedor">
<<<<<<< HEAD
    <div class="container">
        <h2>VACANTES ASIGNADAS</h2>
        
        <!-- Botón para mostrar el formulario -->
        <button id="mostrarFormulario">+</button>

        <!-- Formulario oculto por defecto -->
        <div id="formulario" style="display: none; margin-top: 20px;">
            <h3>Agregar Nueva Vacante</h3>
            <form action="vacantes.php" method="POST">
                <label for="codigo">Código:</label>
                <input type="text" id="codigo" name="codigo" required>
                
                <label for="coordinacion_inicial">Coordinación Inicial:</label>
                <input type="text" id="coordinacion_inicial" name="coordinacion_inicial" required>
                
                <label for="coordinacion_final">Coordinación Final:</label>
                <input type="text" id="coordinacion_final" name="coordinacion_final" required>
                
                <label for="numero_aspirantes">Número de Aspirantes:</label>
                <input type="number" id="numero_aspirantes" name="numero_aspirantes" required>
                
                <input type="submit" value="Agregar Vacante">
                <button type="button" id="cancelarFormulario">Cancelar</button>
            </form>
        </div>

        <div class="cards-container">
        <?php foreach($datos1 as $row){ ?>
            <div class="card">
                <p><strong>Código:</strong> <?php echo $row['cod_vacante']; ?></p>
                <p><strong>Coordinación Inicial:</strong> Titulada</p>
                <p><strong>Coordinación Final:</strong> Titulada</p>
                <p><strong>Número de Aspirantes:</strong> 40</p>
                <p><strong>Evaluados:</strong> 13</p>
                <p><strong>Por Evaluar:</strong> 27</p>
                <a href="./asignacionInstructor.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button>Asignar</button></a>
                <a href="../evaluador/listaCandidatos.php?cod_vacante=<?php echo $row['cod_vacante']; ?>">
                    <button>VER..</button>
                </a>
=======
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
            
                
>>>>>>> d1eb4d57ad25d4ef9e20b7ea96a4c7ab1fb77c5b
            </div>
        <?php } ?>
        </div>
    </div>
<<<<<<< HEAD
</div>
<script>
    $(document).ready(function() {
        // Muestra u oculta el formulario al hacer clic en el botón
        $('#mostrarFormulario').click(function() {
            $('#formulario').toggle();
        });

        // Cierra el formulario al hacer clic en el botón de cancelar
        $('#cancelarFormulario').click(function() {
            $('#formulario').hide();
        });
    });
</script>

    <?php 
=======
    <?php
>>>>>>> d1eb4d57ad25d4ef9e20b7ea96a4c7ab1fb77c5b
    require '../shareFolder/footer.php';
    ?>
</body>
</html>