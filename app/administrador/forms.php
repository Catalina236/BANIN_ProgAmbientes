<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de Edición</title>
    <link rel="stylesheet" href="../../assets/css/links/agregarUsuario.css">
    <style>

        h2 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        form {
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        require '../../app/config.php'; 
        require '../../app/shareFolder/header.php';
    ?>
    <div class="contenedor">
        <h2>Editar Traslado</h2>
        <form id="formTraslado">
            <label for="fechaTraslado">Fecha de Traslado:</label>
            <input type="date" id="fechaTraslado" name="fechaTraslado" required>
            
            <label for="motivoTraslado">Motivo del Traslado:</label>
            <select id="motivoTraslado" name="motivoTraslado" required>
                <option value="">Seleccione un motivo</option>
                <option value="laboral">Laboral</option>
                <option value="familiar">Familiar</option>
                <option value="salud">Salud</option>
                <option value="otro">Otro</option>
            </select>
            
            <label for="detallesTraslado">Detalles del Traslado:</label>
            <textarea id="detallesTraslado" name="detallesTraslado" rows="4"></textarea>
            
            <button type="submit">Guardar Traslado</button>
        </form>

        <h2>Editar Reclamación</h2>
        <form id="formReclamacion">
            <label for="fechaReclamacion">Fecha de Reclamación:</label>
            <input type="date" id="fechaReclamacion" name="fechaReclamacion" required>
            
            <label for="tipoReclamacion">Tipo de Reclamación:</label>
            <select id="tipoReclamacion" name="tipoReclamacion" required>
                <option value="">Seleccione un tipo</option>
                <option value="academica">Académica</option>
                <option value="administrativa">Administrativa</option>
                <option value="financiera">Financiera</option>
                <option value="otra">Otra</option>
            </select>
            
            <label for="detallesReclamacion">Detalles de la Reclamación:</label>
            <textarea id="detallesReclamacion" name="detallesReclamacion" rows="4"></textarea>
            
            <button type="submit">Guardar Reclamación</button>
        </form>
        

        <h2>Editar Protección</h2>
        <form id="formProteccion">
            <label for="tipoProteccion">Tipo de Protección:</label>
            <select id="tipoProteccion" name="tipoProteccion" required>
                <option value="">Seleccione un tipo</option>
                <option value="legal">Legal</option>
                <option value="seguridad">Seguridad</option>
                <option value="salud">Salud</option>
                <option value="otra">Otra</option>
            </select>
            
            <label for="fechaInicioProteccion">Fecha de Inicio de Protección:</label>
            <input type="date" id="fechaInicioProteccion" name="fechaInicioProteccion" required>
            
            <label for="detallesProteccion">Detalles de la Protección:</label>
            <textarea id="detallesProteccion" name="detallesProteccion" rows="4"></textarea>
            
            <button type="submit">Guardar Protección</button>
        </form>
    </div>

    <?php 
        require '../shareFolder/footer.php';
    ?>

    <script>
        // Aquí puedes agregar JavaScript para manejar la sumisión de los formularios
        document.getElementById('formTraslado').addEventListener('submit', function(e) {
            e.preventDefault();
            // Lógica para manejar el envío del formulario de Traslado
            console.log('Formulario de Traslado enviado');
        });

        document.getElementById('formReclamacion').addEventListener('submit', function(e) {
            e.preventDefault();
            // Lógica para manejar el envío del formulario de Reclamación
            console.log('Formulario de Reclamación enviado');
        });

        document.getElementById('formProteccion').addEventListener('submit', function(e) {
            e.preventDefault();
            // Lógica para manejar el envío del formulario de Protección
            console.log('Formulario de Protección enviado');
        });
    </script>
</body>
</html>