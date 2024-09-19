<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/links/agregarUsuario.css">
</head>
<body>

    <?php
        require '../../app/config.php'; 
        require '../../app/shareFolder/header.php';
    ?>

    <div class="contenedor">
        <form action="crearUsuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el primer nombre" required>
            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" placeholder="Ingrese el primer Apellido" required>

            <label for="documento">Número de documento:</label>
            <input type="text" id="documento" name="numero_documento" placeholder="Ingrese el número de documento" required>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="">Seleccione un rol</option>
                <option clas="roloption" value="Instructor evaluador">Instructor evaluador</option>
                <option clas="roloption" value="Coordinador">Coordinador</option>
                <option clas="roloption" value="Administrador">Administrador</option>
            </select>

            <input type="submit" value="Crear Usuario">
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
<?php 
    require '../shareFolder/footer.php';
?>
</body>
</html>
