<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
    <?php
        require '../../app/config.php'; 
        require 'header.php';
    ?>
    <div class="contenedor2">
        <div class="imagen-contenedor"></div>
        <div class="formulario">
            <img src="../../assets/img/logos/logosena.png" alt="Logo SENA" class="logof">
            <!--<h1>INICIO DE SESIÓN</h1>-->
            <form class="login-form" action="" method="post">
                <label for="">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Usuario" name="numero_doc" required>
                </label>
                <label for="">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Contraseña" name="contraseña" required>
                <i class="fa-solid fa-eye"></i>
                </label>
               <input type="submit" value="Ingresar" name="Validar" class="boton">
            </form>
        </div>
    </div>
</body>
</html>
<?php
   require_once '../../sql/class.php';
   //session_start();
   if(isset($_SESSION['rol']) && isset($_SESSION['numero_documento'])){
       header("Location:vercuenta.php");
   }
   else{
       header("../../index.php");
   }
   
   if (isset($_POST['Validar'])){
       $numero=$_POST['numero_doc'];
       $contraseña=$_POST['contraseña'];
       $trabajo=new Trabajo();
       $datos=$trabajo->iniciarSesion($numero, $contraseña);
   }
   
?>