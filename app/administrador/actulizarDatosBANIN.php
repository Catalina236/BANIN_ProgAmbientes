<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/links/agregarUsuario.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .contenedor {
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
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
        require '../../app/config.php'; 
        require '../../app/shareFolder/header.php';
    ?>

    <div class="contenedor">
        <h1>Actualizar Datos BANIN</h1>
        <div class="info">
            <p class="fecha">Fecha de última actualización: 19/09/2024</p>
            <p class="hora">Hora de última actualización: 11:30am</p>
        </div>
        <div class="botones">
            <button class="boton actualizar">ACTUALIZAR</button>
            <button class="boton descargar">DESCARGAR EN DATOS BANIN</button>
        </div>
        <div class="estado">
            <p>Estado: Datos actualizados</p>
            <p>Candidatos postulados: 150</p>
            <p>Nuevos candidatos desde la última actualización: 5</p>
        </div>
    </div>


    <?php 
        require '../shareFolder/footer.php';
    ?>
</body>
</html>
