<?php
require_once '../../app/config.php';
requireRole(['2']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de Edición</title>
    <link rel="stylesheet" href="../../assets/css/links/gestionCoordinador.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>
    <div class="contenedor">
        <div class="contenedor_1">
            <div class="informacion">
                <h3>Información</h3>
                <p><strong>Código:</strong> 20847</p>
                <p><strong>Documento:</strong> 79314342</p>
                <p><strong>Nombre:</strong> MANUEL EDUARDO ALEJO DIAZ</p>
                <p><strong>Estado BANIN:</strong> Seleccionado</p>
                <p><strong>Coordinación Inicial:</strong> COMPLEMENTARIA</p>
                <p><strong>Coordinación Final:</strong> COMPLEMENTARIA</p>
                <p><strong>Traslado:</strong> Confirmado En 29331</p>
                <p><strong>Reclamación:</strong> 7-2023-313747</p>
                <p><strong>Protección:</strong> 7-2023-287082 - NO APROBADA</p>
                <a href="javascript:void(0);" id="openModal"><button class="buttonInfo">Respuestas</button></a>
            </div>

            <!-- Modal -->
            <div class="modal" id="responseModal">
                <div class="modal-content">
                    <h2>Formulario de Respuestas</h2>
                    <button class="close" id="closeModal">&times;</button>
                    <form>
                        <label for="nis">NIS:</label>
                        <input type="text" id="nis" name="nis" placeholder="Ingresa el NIS" required>

                        <label for="radicado">Número Radicado:</label>
                        <input type="text" id="radicado" name="radicado" placeholder="Ingresa el Número Radicado" required>

                        <label for="adjunto">Adjunto:</label>
                        <input type="file" id="adjunto" name="adjunto" required>

                        <label for="adjuntoPDF">Adjunto PDF:</label>
                        <input type="file" id="adjuntoPDF" name="adjuntoPDF" accept=".pdf" required>

                        <label for="conclusion">Conclusión (Resumen):</label>
                        <textarea id="conclusion" name="conclusion" rows="4" placeholder="Escribe una conclusión..." required></textarea>

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="contenedor_2">
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
                <button type="button" class="buttonForms" onclick="confirmarAccion('Reclamación', 'guardar')">Guardar Reclamación</button>
                
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
                <label for="adjuntaCI">Adjunta C.I.(Imagen):</label>
                <input type="file" id="adjuntaCI" name="adjuntaCI" accept="image/*" required>
                <label for="adjuntaPDF">Adjunta PDF Radicado:</label>
                <input type="file" id="adjuntaPDF" name="adjuntaPDF" accept=".pdf" required>
                <label for="numeroRadicado">Resumen PQR:</label>
                <input type="text" id="numeroRadicado" name="numeroRadicado" required>
                <button type="button" class="buttonForms" onclick="confirmarAccion('Reclamación', 'guardar')">Guardar Reclamación</button>
            </form>
        </div>
    </div>
    
    <?php 
        require '../shareFolder/footer.php';
    ?>
    <script>
        // JavaScript para controlar la apertura y cierre del modal
        const modal = document.getElementById("responseModal");
        const openModalBtn = document.getElementById("openModal");
        const closeModalBtn = document.getElementById("closeModal");

        // Abrir modal al hacer clic en el botón de "Respuestas"
        openModalBtn.onclick = function() {
            modal.style.display = "flex";
        }

        // Cerrar modal al hacer clic en el botón de cerrar
        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        // Cerrar modal al hacer clic fuera del contenido
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>