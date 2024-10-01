<?php
require_once '../../app/config.php';
requireRole(['1']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/links/agregarUsuario.css">
    <style>

        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        .info {
            margin-bottom: 20px;
        }
        .fecha, .hora {
            font-size: 14px;
            color: #666;
        }
        .botones {
            display: flex;
            gap: 10px;
        }
        .boton {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .actualizar {
            background-color: #4CAF50;
        }
        .actualizar:hover {
            background-color: #45a049;
        }
        .descargar {
            background-color: #008CBA;
        }
        .descargar:hover {
            background-color: #007aa3;
        }
        .estado {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3fe;
            border-left: 5px solid #2196F3;
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
        <h1>Actualizar Datos BANIN</h1>
        <div class="info">
            <p class="fecha">Fecha de última actualización: 19/09/2024</p>
            <p class="hora">Hora de última actualización: 11:30am</p>
        </div>
        <div class="botones">
            <button class="boton actualizar">ACTUALIZAR</button>
            <button class="boton descargar">DESCARGAR DATOS BANIN</button>
        </div>
        <div class="estado">
            <p>Estado: Datos actualizados</p>
            <p>Vacantes: 150</p>
            <p>Nuevas Vacantes desde la última actualización: 5</p>
        </div>
    </div>


    <?php 
        require '../shareFolder/footer.php';
    ?>
</body>
</html>
