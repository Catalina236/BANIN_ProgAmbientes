<?php
require_once '../../app/config.php';
requireRole(['1']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de Edición</title>
    <link rel="stylesheet" href="../../assets/css/links/agregarUsuario.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
    ?>
        <div class="informacion">
            <h3>Información</h3>
            <p><strong>Código:</strong>20847</p>
            <p><strong>Documento:</strong>79314342</p>
            <p><strong>Nombre:</strong>MANUEL EDUARDO ALEJO DIAZ</p>
            <p><strong>Estado BANIN:</strong>Seleccionado</p>
            <p><strong>Coordinación Inicial:</strong>COMPLEMENTARIA</p>
            <p><strong>Coordinación Final:</strong>COMPLEMENTARIA</p>
            <p><strong>Traslado:</strong>Confirmado En 29331</p>
            <p><strong>Reclamación:</strong>7-2023-313747</p>
            <p><strong>Protección:</strong>7-2023-287082 - NO APROBADA</p>
            <a href=""><button type="button">Respuestas</button></a>
        </div>
        <div class="contenedor">

            <form id="formTraslado">
                <label for="numeroRadicado">Fecha de solisitud:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <label for="numeroNIS">Codigo Destino:</label>
                <input type="text" id="numeroNIS" name="numeroNIS" required>
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>
                <label for="correoRemitente">Correo Remitente:</label>
                <input type="email" id="correoRemitente" name="correoRemitente" required>
                <label for="numeroTelefonico">Numero Telefonico:</label>
                <input type="tel" id="numeroTelefonico" name="numeroTelefonico" required>
                <label for="adjuntaCI">Adjunta C.I.(Imagen):</label>
                <input type="file" id="adjuntaCI" name="adjuntaCI" accept="image/*" required>
                <label for="adjuntaPDF">Adjunta PDF Radicado:</label>
                <input type="file" id="adjuntaPDF" name="adjuntaPDF" accept=".pdf" required>
                <button type="button" onclick="confirmarAccion('Reclamación', 'guardar')">Guardar Reclamación</button>
            </form>

            <form id="formReclamacion">
                <h2>Editar Reclamación</h2>
                <label for="numeroRadicado">Numero Radicado:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <label for="numeroNIS">Numero NIS:</label>
                <input type="text" id="numeroNIS" name="numeroNIS" required>
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>
                <label for="correoRemitente">Correo Remitente:</label>
                <input type="email" id="correoRemitente" name="correoRemitente" required>
                <label for="numeroTelefonico">Numero Telefonico:</label>
                <input type="tel" id="numeroTelefonico" name="numeroTelefonico" required>
                <label for="adjuntaCI">Adjunta C.I.(Imagen):</label>
                <input type="file" id="adjuntaCI" name="adjuntaCI" accept="image/*" required>
                <label for="adjuntaPDF">Adjunta PDF Radicado:</label>
                <input type="file" id="adjuntaPDF" name="adjuntaPDF" accept=".pdf" required>
                <label for="numeroRadicado">Resumen PQR:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <button type="button" onclick="confirmarAccion('Reclamación', 'guardar')">Guardar Reclamación</button>
                
            </form>
        
            <form id="formProteccion">
                <h2>Editar Protección</h2>
                <label for="numeroRadicado">Numero Radicado:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <label for="numeroNIS">Numero NIS:</label>
                <input type="text" id="numeroNIS" name="numeroNIS" required>
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>
                <label for="correoRemitente">Correo Remitente:</label>
                <input type="email" id="correoRemitente" name="correoRemitente" required>
                <label for="numeroTelefonico">Numero Telefonico:</label>
                <input type="tel" id="numeroTelefonico" name="numeroTelefonico" required>
                <label for="numeroTelefonico">Numero Telefonico:</label>
                <input type="tel" id="numeroTelefonico" name="numeroTelefonico" required>
                <label for="adjuntaCI">Adjunta C.I.(Imagen):</label>
                <input type="file" id="adjuntaCI" name="adjuntaCI" accept="image/*" required>
                <label for="adjuntaPDF">Adjunta PDF Radicado:</label>
                <input type="file" id="adjuntaPDF" name="adjuntaPDF" accept=".pdf" required>
                <label for="numeroRadicado">Resumen PQR:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <button type="button" onclick="confirmarAccion('Reclamación', 'guardar')">Guardar Reclamación</button>
            </form>
        </div>
        <?php 
            require '../shareFolder/footer.php';
        ?>

    <script>
    </script>
</body>
</html>