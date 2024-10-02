<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['1']);
$trabajo = new Trabajo();

if (isset($_POST['Actualizar'])) {
    $numero_doc = $_POST['num_doc'];
    $nombre_completo = $_POST['nombre_completo'];
    $tipo_doc = $_POST['tipo_doc'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['id_rol'];

    // Actualizar usuario usando el campo de nombre completo
    $trabajo->actualizar_usuario($numero_doc, $tipo_doc, $contraseña, $nombre_completo, $email, $telefono, $rol);
}

$d1 = $d2 = $d3 = $d4 = $d5 = $d6 = $d7 = '';

if (isset($_GET['numero'])) {
    $numero_doc = $_GET['numero'];
    $datos = $trabajo->ver_un_usuario($numero_doc);
    
    if ($datos) {
        // Asegúrate de que datos no esté vacío y contiene al menos un resultado
        $d1 = $datos['numero_documento'];
        $d2 = $datos['nombre_completo'];
        $d3 = $datos['tipo_doc'];
        $d5 = $datos['email'];
        $d6 = $datos['telefono'];    
        $d7 = $datos['id_rol'];
    } else {
        echo "<script>alert('No se encontró el usuario.'); window.location='usuario.php';</script>";
        exit; // Detener la ejecución si no se encuentra el usuario
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
        <label for="">Número de documento:</label>
        <input type="text" id="documento" name="num_doc" value="<?php echo htmlspecialchars($d1); ?>" required readonly>

        <label for="">Nombre completo</label>
        <input type="text" id="nombre_completo" name="nombre_completo" placeholder="Ingrese su nombre completo" value="<?php echo htmlspecialchars($d2); ?>" required>

        <label for="">Tipo de documento</label>
        <select name="tipo_doc" required>
            <option value="Cédula de ciudadanía" <?php echo ($d3 == 'Cédula de ciudadanía') ? 'selected' : ''; ?>>Cédula de ciudadanía</option>
            <option value="Cédula de extranjería" <?php echo ($d3 == 'Cédula de extranjería') ? 'selected' : ''; ?>>Cédula de extranjería</option>
            <option value="Pasaporte" <?php echo ($d3 == 'Pasaporte') ? 'selected' : ''; ?>>Pasaporte</option>
        </select>

        <label for="">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una nueva contraseña (déjelo vacío si no desea cambiarla)">

        <label for="">Email</label>
        <input type="email" name="email" id="email" required placeholder="Ingrese su correo" value="<?php echo htmlspecialchars($d5); ?>">

        <label for="">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" placeholder="Ingrese un número de teléfono" required value="<?php echo htmlspecialchars($d6); ?>">

        <label for="rol">Rol:</label>
        <select id="rol" name="id_rol" required>
            <option value="">Seleccione un rol</option>
            <option value="3" <?php echo ($d7 == '3') ? 'selected' : ''; ?>>Instructor evaluador</option>
            <option value="2" <?php echo ($d7 == '2') ? 'selected' : ''; ?>>Coordinador</option>
            <option value="1" <?php echo ($d7 == '1') ? 'selected' : ''; ?>>Administrador</option>
        </select>
        
        <input type="submit" value="Actualizar Usuario" name="Actualizar">
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
