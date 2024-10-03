<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['2']);
$result1 = new Trabajo();
$evaluadores = $result1->obtenerEvaluadores();
$cod_vacante = isset($_GET['cod_vacante']) ? $_GET['cod_vacante'] : '';
$actualizacionExitosa = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['num_doc_evaluador'])) {
    $nuevo_num_doc_evaluador = $_POST['num_doc_evaluador'];
    $actualizacionExitosa = $result1->actualizarNumDocEvaluador($cod_vacante, $nuevo_num_doc_evaluador);
}
if (isset($_POST['ajax']) && $_POST['ajax'] === 'nombre_evaluador') {
    $num_doc_evaluador = $_POST['num_doc_evaluador'];
    $nombre_completo = $result1->obtenerNombreEvaluador($num_doc_evaluador);
    echo $nombre_completo;
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Instructor</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/links/asignarInstructor.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>
<div class="modalS">
        <a href="./vacantes.php"><button class="perfil-btn" type="submit" style="margin-top:30px">Regresar</button></a>
    </div>
    <div class="contenedor">
        <h2>Asignar Evaluador</h2>
        <form action="./asignacionInstructor.php?cod_vacante=<?php echo htmlspecialchars($cod_vacante); ?>" method="POST">
            <input type="hidden" id="cod_vacante" name="cod_vacante" value="<?php echo htmlspecialchars($cod_vacante); ?>" required>
            
            <label for="num_doc_evaluador">Número de Documento del Instructor</label>
            <select id="num_doc_evaluador" name="num_doc_evaluador" required>
                <option value="">Seleccione un evaluador</option>
                <?php foreach ($evaluadores as $evaluador): ?>
                    <option value="<?php echo $evaluador['numero_documento']; ?>"><?php echo $evaluador['numero_documento']; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="nombre_completo">Nombre Completo del Instructor</label>
            <input type="text" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo del instructor" readonly>

            <input type="submit" value="Asignar">
        </form>
        <?php if ($actualizacionExitosa): ?>
            <script>
                setTimeout(function() {
                    alert('Instructor asignado exitosamente.');
                }, 100);
            </script>
        <?php endif; ?>
    </div>
    <?php 
    require '../shareFolder/footer.php';
    ?>
    <script src="<?php echo BASE_URL; ?>assets/js/asignacionInstructor.js"></script>

    <script>
        document.querySelectorAll('.filtro-btn').forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('active');
            });
        });
    </script>

</body>
</html>
