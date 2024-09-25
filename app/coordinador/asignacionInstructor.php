<?php
require_once '../../app/config.php';
requireRole(['2']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Instructor</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/links/asignarInstructor.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
    ?>
    <div class="modalS">
        <a href="./vacantes.php"><button class="perfil-btn" type="submit" style="margin-top:30px">Regresar</button></a>
    </div>
    
    <div class="contenedor">
        <form action="editarUsuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>

            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" placeholder="Ingrese el apellido" required>

            <label for="documento">Número de documento:</label>
            <input type="text" id="documento" name="numero_documento" placeholder="Ingrese el número de documento" required readonly>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="">Seleccione un rol</option>
                <option value="Instructor evaluador">Instructor evaluador</option>
                <option value="Coordinador">Coordinador</option>
                <option value="Administrador">Administrador</option>
            </select>

            <input type="submit" value="Guardar Cambios">
        </form>
    </div>
    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.filtro-btn').forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('active');
            });
        });
    </script>

</body>
</html>
