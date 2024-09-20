<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/links/login.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
<?php
        require '../../app/config.php';
        require '../../app/shareFolder/header.php';
    ?>
    <?php
        require '../../app/shareFolder/navbar.php';
    ?>

    <div class="contenedor">        
        <div class="imagen-contenedor"></div>
        <div class="formulario">
            <img src="../../assets/img/logos/logosena.png" alt="Logo SENA" class="logof">
            <form class="login-form" action="" method="post">
        <?php
        require_once '../../sql/class.php';
        if(isset($_SESSION['id_rol']) && isset($_SESSION['numero_documento'])){
                header("Location:cuenta.php");
        }
        
        if (isset($_POST['Validar'])){
            $numero=$_POST['numero_doc'];
            $contraseña=$_POST['contraseña'];
            $trabajo=new Trabajo();
            $datos=$trabajo->iniciarSesion($numero, $contraseña);
        }
    ?>
        <label for="">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Número de documento" name="numero_doc" required>
                </label>

                <label for="">
                    <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" placeholder="Contraseña" name="contraseña" required>
                        <i class="fa-solid fa-eye" id="togglePassword"></i>
                </label>
               <input type="submit" value="Ingresar" name="Validar" class="boton">
            </form>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
</script>

</body>
</html>