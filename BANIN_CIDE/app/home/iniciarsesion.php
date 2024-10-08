<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/links/login.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
    <div class="sub_body">
        <?php
            require '../../app/config.php';
            require '../../app/shareFolder/navbar.php';
        ?>

        <div class="contenedor">        
            <div class="imagen-contenedor">
            </div>

            <div class="formulario-contenedor">
                <div class="formulario">
                    <a href="<?php echo BASE_URL; ?>index.php"><img src="../../assets/img/logos/logosena.png" alt="Logo SENA" class="logof"></a>
                    
                    <form class="login-form" action="" method="post">
                        <?php
                            require_once '../../sql/class.php';
                            
                        
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                        
                            if(isset($_SESSION['id_rol']) && isset($_SESSION['numero_documento'])){
                                header("Location:../../index.php");
                                exit();
                            }
                            
                            $error_message = '';
                            
                            if (isset($_POST['Validar'])){
                                $numero = $_POST['numero_doc'];
                                $contraseña = $_POST['contraseña'];
                                
                                try {
                                    $trabajo = new Trabajo();
                                    $resultado = $trabajo->iniciarSesion($numero, $contraseña);
                                
                                    $error_message = "Error al iniciar sesión. Por favor, verifica tus credenciales.";
                                } catch (Exception $e) {
                                
                                    $error_message = "Error: " . $e->getMessage();
                                }
                            }
                            
                            if (!empty($error_message)) {
                                echo "<div class='error-message'>$error_message</div>";
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
            
        </div>
        <?php 
            require '../shareFolder/footer.php';
        ?>

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