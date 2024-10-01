<?php
require_once '../../app/config.php'; 
require_once '../../sql/class.php';
requireRole(['2']); 
$result1 = new Trabajo();
$datos1 = $result1->obtenerCodigo();

$cod_vacante = isset($_GET['cod_vacante']) ? $_GET['cod_vacante'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['num_doc_evaluador'])) {
        $nuevo_num_doc_evaluador = $_POST['num_doc_evaluador'];
        $actualizacionExitosa = $result1->actualizarNumDocEvaluador($cod_vacante, $nuevo_num_doc_evaluador);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/links/asignarInstructor.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
    ?>

    <div class="modalS">
        <a href="./vacantes.php"><button class="perfil-btn" type="button">Regresar</button></a>
    </div>

    <div class="contenedor">
        <h2>Asignar Evaluador</h2>


        <form action="./asignacionInstructor.php?cod_vacante=<?php echo htmlspecialchars($cod_vacante); ?>" method="POST">
            <input type="hidden" id="cod_vacante" name="cod_vacante" value="<?php echo htmlspecialchars($cod_vacante); ?>" required>
            
            <label for="num_doc_evaluador">Número de Documento del Evaluador:</label>
            <input type="text" id="num_doc_evaluador" name="num_doc_evaluador" placeholder="Ingrese el nuevo número de documento" required>
            
            <input type="submit" value="Asignar">
        </form>
    </div>

    <?php 
    require '../shareFolder/footer.php';
    ?>
</body>
</html>
