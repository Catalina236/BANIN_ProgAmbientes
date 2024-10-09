<?php
require_once('../../sql/class.php');
require_once '../../app/config.php';
requireRole(['1']);
$dato = new Trabajo();

if (isset($_POST['Registrar'])) {
    $num_doc = $_POST['num_doc'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $nombre_completo = $nombres . ' ' . $apellidos; // Concatenar nombres y apellidos
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $id_rol = $_POST['id_rol'];
    $contraseña = $_POST['contraseña'];
    $dato->crearUsuario($num_doc, $tipo_doc, $nombre_completo, $contraseña, $email, $telefono, $id_rol);
}
?>
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
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>
    <div class="contenedor">
        <form action="" method="POST">
            <label for="documento">Número de documento:</label>
            <input type="text" id="documento" name="num_doc" placeholder="Ingrese el número de documento" required>

            <label for="">Tipo de documento</label>
           <select name="tipo_doc" id="">
                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                <option value="Cédula de extranjería">Cédula de extranjería</option>
                <option value="Pasaporte">Pasaporte</option>
            </select>

            <label for="">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" required placeholder="Ingrese la contraseña">

            <label for="nombre">Nombres:</label>
            <input type="text" id="nombre" name="nombres" placeholder="Ingrese el primer nombre" required>

            <label for="Apellido">Apellidos:</label>
            <input type="text" id="Apellido" name="apellidos" placeholder="Ingrese el primer Apellido" required>

            <label for="">Email</label>
            <input type="email" name="email" id="email" required placeholder="Ingrese su correo">

            <label for="">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Ingrese un número de teléfono" required>

            <label for="rol">Rol:</label>
            <select id="rol" name="id_rol" required>
                <option value="">Seleccione un rol</option>
                <option class="roloption" value="3">Instructor evaluador</option>
                <option clas="roloption" value="2">Coordinador</option>
                <option clas="roloption"value="1">Administrador</option>
            </select>

            <input type="submit" value="Crear Usuario" name="Registrar">
        </form>
    </div>

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
