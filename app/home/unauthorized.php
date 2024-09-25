<?php
require_once '../../app/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso No Autorizado</title>
</head>
<body>
    <h1>Acceso No Autorizado</h1>
    <p>Lo sentimos, no tienes permiso para acceder a esta página.</p>
    <a href="<?php echo BASE_URL; ?>app/home/iniciarsesion.php">Volver a la página principal</a>
</body>
</html>