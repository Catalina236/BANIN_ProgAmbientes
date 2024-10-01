<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['1']);
$trabajo=new Trabajo();
if(isset($_POST['Actualizar'])){
    $numero_doc=$_POST['num_doc'];
    $nombre_usuario=$_POST['nom_usuario'];
    $tipo_doc=$_POST['tipo_doc'];
    $contraseña=$_POST['contraseña'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $rol=$_POST['id_rol'];
    $trabajo->actualizar_usuario($numero_doc, $nombre_usuario, $tipo_doc, $contraseña,$nombres, $apellidos,$email, $telefono, $rol);
}
if(isset($_GET['numero'])){
    $numero_doc=$_GET['numero'];
    $datos=$trabajo->ver_un_usuario($numero_doc);
    $d1=$datos[0]['numero_documento'];
    $d2=$datos[0]['nombre_usuario'];
    $d3=$datos[0]['tipo_doc'];
    $d4=$datos[0]['contraseña'];
    $d5=$datos[0]['nombres'];
    $d6=$datos[0]['apellidos'];
    $d7=$datos[0]['email'];
    $d8=$datos[0]['telefono'];    
    $d9=$datos[0]['nombre_rol'];
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
        <label for="">Número de documento:</label>
        <input type="text" id="documento" name="num_doc" value="<?php echo $d1;?>" required>
        <label for="">Nombre de usuario</label>
        <input type="text" id="documento" name="nom_usuario" placeholder="Ingrese su nombre de usuario" value="<?php echo $d2;?>" required>
        <label for="">Tipo de documento
        <select name="tipo_doc" id="" value="<?php echo $d3;?>">
            <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
            <option value="Cédula de extranjería">Cédula de extranjería</option>
            <option value="Pasaporte">Pasaporte</option>
        </select>
        </label>
        <label for="">Contraseña
        <input type="password" name="contraseña" id="contraseña" required placeholder="Ingrese la contraseña" value="<?php echo $d4;?>">
        </label>
        <label for="nombre">Nombres:</label>
        <input type="text" id="nombre" name="nombres" placeholder="Ingrese el primer nombre" required value="<?php echo $d5;?>">
        <label for="Apellido">Apellidos:</label>
        <input type="text" id="Apellido" name="apellidos" placeholder="Ingrese el primer Apellido" required value="<?php echo $d6;?>">
        <label for="">Email</label>
        <input type="email" name="email" id="email" required placeholder="Ingrese su correo" value="<?php echo $d7;?>">
        <label for="">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" placeholder="Ingrese un número de teléfono" required value="<?php echo $d8;?>">
        <label for="rol">Rol:</label>
        <select id="rol" name="id_rol" required value="<?php echo $d9;?>">
            <option value="">Seleccione un rol</option>
            <option class="roloption" value="3">Instructor evaluador</option>
            <option clas="roloption" value="2">Coordinador</option>
            <option clas="roloption"value="1">Administrador</option>
        </select>
        <input type="submit" value="Actualizar Usuario" name="Actualizar">
    </form>
</div>
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
