<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['3','2']);
if (isset($_GET['cod_vacante'])) {
    $tipoF=$_GET['cod_vacante'];
    $result = new Trabajo(); // Crea una instancia de la clase Trabajo
    $vacante = $result->obtenerCodigos($tipoF); // Usa la instancia correcta
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postulados</title>
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/links/listaCandidatos.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>
    <div class="contenedor">
        <div class="infoVacante">
            <div class="titulo">
                <h1>Lista de Postulados</h1>
            </div>
            <div class="info">
                <p class="ps"><strong>Vacantes:</strong> 2</p>
                <p><strong>Postulados:</strong> 7</p>
            </div>
        </div>
        <?php foreach($vacante as $row){ ?>
        <div class="info-container" id="infoContainer">
            <p><strong>Codigo BANIN:</strong> <?php echo $row['cod_vacante']; ?></p>
                <p><strong>Descripción:</strong> <?php echo $row['nombre_vacante'];?></p> 
                <p><strong>Codigo Contratación postulación APE:</strong></p>
                <p><strong>Proyecto / Coordinación:</strong><?php echo $row["Descripcion"]; ?></p>
                <p><strong>Instructor Evaluador:</strong> <?php echo $row["nombre_completo"]?></p>
                <p><strong>PROGRAMA DE FORMACION :</strong><?php echo $row['nombre_vacante'];?></p>
        </div>
        
        <div class="perfilInstructor">
            <h1 id="profileDescription" class="hidden" style="background-color: #f7f7f7;padding: 20px;border-radius: 8px;border: 1px solid #ccc;margin-bottom: 20px;grid-template-columns: 1fr;gap: 10px;">
            <?php echo $row['perfil_vacante'];?>
            </h1>
        </div>
        <?php } ?>
        <p><strong>Perfil Vacante:</strong> 
            <button class="perfil-btn" type="submit" id="toggleButton">Mostrar</button>
        </p>

        <div class="tablaGeneradaPorLaConsulta">
            <table>
                <thead>
                    <tr>
                        <th class="boerder_left">NUMERO DE CEDULA</th>
                        <th>Nombre</th>
                        <th>Estado BANIN</th>
                        <th style="text-align: center;">Evaluado</th>
                        <th class="boerder_right" style="text-align: center;">Evaluar</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>51964904</td>
                    <td>MARTHA LILIANA ARANGO GUTIERREZ</td>
                    <td>Si cumple</td>
                    <td style="text-align: center;">
                        <input type="checkbox" name="evaluado1" style="accent-color: #00ac00;">
                    </td>
                    <td style="text-align: center;">
                        <a href="evaluarCandidato.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button class="perfil-btn" type="submit">Evaluar</button></a>
                    </td>
                </tr>
                <tr>
                    <td>79207422</td>
                    <td>JOSE ANTONIO CARRILLO CORREA</td>
                    <td>Si cumple</td>
                    <td style="text-align: center;">
                        <input type="checkbox" name="evaluado1" style="accent-color: #00ac00;">
                    </td>
                    <td style="text-align: center;">
                        <a href="evaluarCandidato.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button class="perfil-btn" type="submit">Evaluar</button></a>
                    </td>
                </tr>
                <tr>
                    <td>79314342</td>
                    <td>MANUEL EDUARDO ALEJO DIAZ</td>
                    <td>Si cumple</td>
                    <td style="text-align: center;">
                        <input type="checkbox" name="evaluado1" style="accent-color: #00ac00;">
                    </td>
                    <td style="text-align: center;">
                        <a href="evaluarCandidato.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button class="perfil-btn" type="submit">Evaluar</button></a>
                    </td>
                </tr>
                <tr>
                    <td>52294893</td>
                    <td>LUZ HELENA QUINTANA</td>
                    <td>Si cumple</td>
                    <td style="text-align: center;">
                        <input type="checkbox" name="evaluado1" style="accent-color: #00ac00;">
                    </td>
                    <td style="text-align: center;">
                        <a href="evaluarCandidato.php?cod_vacante=<?php echo $row['cod_vacante']; ?>"><button class="perfil-btn" type="submit">Evaluar</button></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        
        <!-- ----------------------------- -->
        <!-- ----------------------------- -->
        <!-- ----------------------------- -->
        <div class="tablaGeneradaPorLaConsulta">
            <table>
                <thead>
                    <tr>
                        <th class="boerder_left">NUMERO DE CEDULA</th>
                        <th>Nombre</th>
                        <th>Estado BANIN</th>
                        <th class="boerder_right" style="text-align: center;">Pesto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>51964904</td>
                        <td>MARTHA LILIANA ARANGO GUTIERREZ</td>
                        <td>Si cumple</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>79207422</td>
                        <td>JOSE ANTONIO CARRILLO CORREA</td>
                        <td>Si cumple</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>Si cumple</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>52294893</td>
                        <td>LUZ HELENA QUINTANA</td>
                        <td>Si cumple</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
    require '../shareFolder/footer.php';
    ?>
    <script src="../../assets/js/ocultarInfo.js"></script>
</body>
</html>