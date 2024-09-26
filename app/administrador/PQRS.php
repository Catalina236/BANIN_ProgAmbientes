<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/control/PQRS.css">
    <title>Formulario PQRS</title>
    </head>
<body>
    <div class="contenedor">
        <h1>Formulario PQRS</h1>
        <form id="pqrsForm">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="tipo">Tipo de solicitud:</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccione una opción</option>
                <option value="peticion">Petición</option>
                <option value="queja">Queja</option>
                <option value="reclamo">Reclamo</option>
                <option value="sugerencia">Sugerencia</option>
            </select>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
        </div>

    <script>
        document.getElementById('pqrsForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Formulario enviado con éxito. Gracias por su mensaje.');
            this.reset();
        });
    </script>
</body>
</html>