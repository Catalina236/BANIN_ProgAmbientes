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
    <link rel="stylesheet" href="../../assets/css/links/formGestionar.css">
</head>
<body>
    <?php
    require '../../app/shareFolder/header.php';
    require '../../app/shareFolder/navbar.php';
    ?>

    <div class="contenedor">
        <div class="tarjeta">
            <form id="formTraslado">
                <label for="detallesTraslado">Detalles del Traslado:</label>
                <textarea id="detallesTraslado" name="detallesTraslado" readonly>Solicitud del coordinador</textarea>
                <div class="botones">
                    <button type="button" class="confirmar" onclick="confirmarAccion('Traslado', 'aceptar')">Aceptar</button>
                    <button type="button" class="rechazar" onclick="confirmarAccion('Traslado', 'rechazar')">Rechazar</button>
                </div>
            </form>
        </div>

        <div class="tarjeta">
            <form id="formReclamacion">
                <label for="detallesReclamacion">Detalles de Reclamación:</label>
                <textarea id="detallesReclamacion" name="detallesReclamacion" readonly>Solicitud del coordinador</textarea>
                <div class="botones">
                    <button type="button" class="confirmar" onclick="confirmarAccion('Reclamación', 'aceptar')">Aceptar</button>
                    <button type="button" class="rechazar" onclick="confirmarAccion('Reclamación', 'rechazar')">Rechazar</button>
                </div>
            </form>
        </div>

        <div class="tarjeta">
            <form id="formProteccion">
                <label for="detallesProteccion">Detalles de Protección:</label>
                <textarea id="detallesProteccion" name="detallesProteccion" readonly>Solicitud del coordinador</textarea>
                <div class="botones">
                    <button type="button" class="confirmar" onclick="confirmarAccion('Protección', 'aceptar')">Aceptar</button>
                    <button type="button" class="rechazar" onclick="confirmarAccion('Protección', 'rechazar')">Rechazar</button>
                </div>
            </form>
        </div>
    </div>
    <div id="confirmModal" class="modal">
        <div class="modal-content">
            <p id="modalMessage"></p>
            <div class="modal-buttons">
                <button id="modalConfirm" class="modal-button modal-confirm">Confirmar</button>
                <button id="modalCancel" class="modal-button modal-cancel">Cancelar</button>
            </div>
        </div>
    </div>

    <?php 
        require '../shareFolder/footer.php';
    ?>

    <script>
    const modal = document.getElementById('confirmModal');
    const modalMessage = document.getElementById('modalMessage');
    const modalConfirm = document.getElementById('modalConfirm');
    const modalCancel = document.getElementById('modalCancel');

    function mostrarModal(mensaje, onConfirm) {
        modalMessage.textContent = mensaje;
        modal.style.display = 'block';

        modalConfirm.onclick = () => {
            modal.style.display = 'none';
            onConfirm();
        };

        modalCancel.onclick = () => {
            modal.style.display = 'none';
        };

        window.onclick = (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };
    }

    function confirmarAccion(tipo, accion) {
        let mensaje = `¿Está seguro que desea ${accion} la solicitud de ${tipo}?`;
        
        mostrarModal(mensaje, () => {
            console.log(`Acción de ${accion} confirmada para ${tipo}`);
            // Aquí iría el código para procesar la acción
            // Por ejemplo: enviarAccion(tipo, accion);
        });
    }

    // Función de ejemplo para enviar la acción al servidor
    function enviarAccion(tipo, accion) {
        // Implementa aquí la lógica para enviar la acción al servidor
        console.log(`Enviando acción: ${accion} para ${tipo}`);
        // Ejemplo de cómo podrías usar fetch para enviar la acción al servidor
        /*
        fetch('/procesar-accion', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ tipo, accion }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Respuesta del servidor:', data);
            // Aquí puedes manejar la respuesta del servidor
        })
        .catch((error) => {
            console.error('Error:', error);
            // Aquí puedes manejar errores
        });
        */
    }
    </script>
</body>
</html>
