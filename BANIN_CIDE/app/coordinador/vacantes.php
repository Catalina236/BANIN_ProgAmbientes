<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['2']);
$result1 = new Trabajo();
$datos1 = $result1->obtenerCodigo();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $cod_vacante = $_POST['codigo'];
    $nombre_vacante = $_POST['nombre_vacante'];
    $perfil_vacante = $_POST['perfil_vacante'];
    $nro_instr_req = $_POST['nro_instr_req'];
    $num_doc_candidato = $_POST['num_doc_evaluador'];  // Cambié el nombre para coincidir con el código
    $Id_tipoF = $_POST['Id_tipoF'];

    // Llamar a la función crearvacante() con los valores del formulario
    print_r($_POST); // Añade esta línea para verificar los datos
    $result2 = $result1->crearvacante($cod_vacante, $nombre_vacante, $perfil_vacante, $nro_instr_req, $num_doc_candidato, $Id_tipoF);

}
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
    ?>
    <div class="contenedor">
    <div class="container">
        <h2>VACANTES ASIGNADAS</h2>
    
        <button id="mostrarFormulario">+</button>
        <div id="formulario" style="display: none; margin-top: 20px;">
            <h3>Agregar Nueva Vacante</h3>
            <form action="./vacantes.php" method="POST">
                <label for="codigo">Codigo Vacante:</label>
                <input type="text" id="codigo" name="codigo" required>
                
                <label for="nombre_vacante">Nombre Vacante</label>
                <input type="text" id="nombre_vacante" name="nombre_vacante" required>
                
                <label for="perfil_vacante">Perfil Vacante</label>
                <input type="text" id="perfil_vacante" name="perfil_vacante" required>
                
                <label for="nro_instr_req">Instructores requeridos</label>
                <input type="number" id="nro_instr_req" name="nro_instr_req" required>

                <label for="num_doc_evaluador">Documento Candidato</label>
                <input type="text" id="num_doc_evaluador" name="num_doc_evaluador" required>
                
                <label for="Id_tipoF">Tipo Formacion:</label>
                <input type="text" id="Id_tipoF" name="Id_tipoF" required>

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
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Muestra u oculta el formulario al hacer clic en el botón
        $('#mostrarFormulario').click(function() {
            $('#formulario').toggle();
        });

        $('#cancelarFormulario').click(function() {
            $('#formulario').hide();
        });
    });
</script>

    <?php 
    require '../shareFolder/footer.php';
    ?>
</body>
</html>
