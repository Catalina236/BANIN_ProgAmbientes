<?php
require_once '../../app/config.php';
require_once '../../sql/class.php';
requireRole(['3','2']);
if (isset($_GET['cod_vacante'])) {
    $tipoF=$_GET['cod_vacante'];
    $result = new Trabajo();
    $vacante = $result->obtenerCodigos($tipoF);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postulados</title>
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/links/evaluar.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
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
        <?php if (!empty($vacante) && is_array($vacante)) { ?>
        <?php foreach($vacante as $row){?>
        <tbody>
            <div class="info-container" id="infoContainer">
                <p><strong>Codigo BANIN:</strong><?php echo $row['cod_vacante'];?></p>
                <p><strong>Codigo Contratación postulación APE:</strong> 29913</p>
                <p><strong>Link APE:</strong> <a href="<?php echo'codigo para optener el link'?>">link</a></p>
                <p><strong>Proyecto / Coordinación:</strong><?php echo $row['Descripcion'];?></span></p>
                <p><strong>Instructor Evaluador:</strong> <?php echo $row["nombre_completo"]; ?></p>
                <p><strong>PROGRAMA DE FORMACION :</strong> <?php echo $row['nombre_vacante'];?></p>
            </div>
        </tbody>
        <?php }?>
        <?php } else { ?>
            <p>No vacantes found.</p>
        <?php } ?>
        
        <div class="perfilInstructor">
            <div id="profileDescription" class="hidden" style="background-color: #f7f7f7;padding: 20px;border-radius: 8px;border: 1px solid #ccc;margin-bottom: 20px;grid-template-columns: 1fr;gap: 10px;">
                <p><strong>Numero Documento:</strong> 32926</p>
                <p><strong>Nombre:</strong> 29913</p>
            </div>
        </div>

        <p><strong>Perfil Vacante:</strong> 
            <button class="perfil-btn" type="submit" id="toggleButton">Mostrar</button>
        </p>
        
        <div id="profileModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="perfil">Opción 1: Título profesional como médico veterinario, médico veterinario y zootecnista, zootecnista. 
                Opción 2: Tecnólogo y/o técnico en producción animal, producción agropecuaria.</h1>
            </div>
        </div>
        
        <div id="experienceModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="experiencia">Experiencia laboral: experiencia comprobada en producción animal, sanidad animal, agroecología y/o 
                    desarrollo rural como mínimo 6 meses en docencia y un año en el área.</h1>
            </div>
        </div>
        
        <div class="info-candidato" id="infocandidato" onclick="toggleInfo()">
            <div class="info-hidden" id="infoHidden">
                <div class="container">
                    <div class="ver-perExp">
                        <button style="background-color: #00ac00; color: white; padding: 6px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;" id="openProfile">Perfil</button>
                        <button style="background-color: #00ac00; color: white; padding: 6px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease; margin-top: 3px;" id="openExperience">Experiencia</button>
                    </div>
                </div>
            </div>
        </div>

        <h2>Formulario de Evaluación</h2>
        <form method="post">
        <?php
        // Mostrar las secciones dependiendo de la descripción
        if ($row['Descripcion'] === 'Formación para el trabajo') { 
        ?>
            <div class="form-group">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div class="form-group">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div class="form-group">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">
            </div>
            <div class="form-group">
                <label for="poblacionVulnerable">Población Vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable">
            </div>
            <div class="form-group">
                <label for="certificacion">Certificación competencias:</label>
                <input type="number" id="certificacion" name="certificacion">
            </div>

            <div class="form-group">
                <label for="formacionL">Formacion laboral:</label>
                <input type="number" id="formacionL" name="formacionL">

            </div>
            <div class="form-group">
            <label for="coordinacionSelect">Nivel de Educacion:</label>
                <select id="coordinacionSelect">

                    <option value="">Selecciona</option>
                    <option value="especializacionPr">Técnico profesional</option>
                    <option value="especializaciontn">Especialización técnica</option>
                    <option value="tecnologia">Tecnologo</option>
                    <option value="especializaciontg">Especialización tecnológica</option>
                    <option value="profesional">Profesional Universitario</option>
                    <option value="especializaciontn">Especialización</option>
                    <option value="maestria">Maestría</option>
                    <option value="doctorado">Doctorado</option>
                </select>
            </div>

            <?php 
        } elseif ($row['Descripcion'] === 'Educación Formal') { 
        ?>
            <div class="form-group">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div class="form-group">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div class="form-group">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">
            </div>

            <div class="form-group">
                <label for="poblacionVulnerable">Población Vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable">

            </div>
            <div class="form-group">
                <label for="certificacion">Certificación competencias:</label>
                <input type="number" id="certificacion" name="certificacion">
            </div>

            <div class="form-group">
                <label for="formacionL">Formacion laboral:</label>
                <input type="number" id="formacionL" name="formacionL">

            </div>
            <div class="form-group">
            <label for="coordinacionSelect">Nivel de Educacion:</label>
                <select id="coordinacionSelect">

                    <option value="">Selecciona</option>
                    <option value="especializacionPr">Técnico profesional</option>
                    <option value="especializaciontn">Especialización técnica</option>
                    <option value="tecnologia">Tecnologo</option>
                    <option value="especializaciontg">Especialización tecnológica</option>
                    <option value="profesional">Profesional Universitario</option>
                    <option value="especializaciontn">Especialización</option>
                    <option value="maestria">Maestría</option>
                    <option value="doctorado">Doctorado</option>
                </select>
            </div>

            <?php 
        } elseif ($row['Descripcion'] === 'SER') { 
        ?>
            <div class="form-group">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div class="form-group">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div class="form-group">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">

            </div>
            <div class="form-group">
                <label for="experienciaProyecto">Experiencia formación de proyectos:</label>
                <input type="number" id="experienciaProyecto" name="experienciaProyecto">
            </div>
            <div class="form-group">
                <label for="experienciacomunidad">Experiencia trabajo con comunidades rurales:</label>
                <input type="number" id="experienciacomunidad" name="experienciacomunidad">
            </div>
            <div class="form-group">
                <label for="poblacionVul">Población Vulnerable:</label>
                <input type="number" id="poblacionVul" name="poblacionVul">
            </div>
            <div class="form-group">
                <label for="arraigo">Arraigo:</label>
                <input type="number" id="arraigo" name="arraigo">
            </div>
            <div class="form-group">
                <label for="certificacionCon">Certificación competencias</label>
                <input type="number" id="certificacionCon" name="certificacionCon">
            </div>
            <div class="form-group">
                <label for="formacionLaboral">Formación Laboral</label>
                <input type="number" id="formacionLaboral" name="formacionLaboral">
            </div>
            <div class="form-group">
            <label for="coordinacionSelect">Nivel de Educacion:</label>
                <select id="coordinacionSelect" onchange="mostrarSecciones()">
                    <option value="">Selecciona</option>
                    <option value="especializaciontn">Especialización técnica</option>
                    <option value="tecnologia">Tecnologo</option>
                    <option value="especializaciontg">Especialización tecnológica</option>
                    <option value="profesional">Profesional Universitario</option>
                    <option value="especializaciontn">Especialización</option>
                    <option value="maestria">Maestría</option>
                    <option value="doctorado">Doctorado</option>
                </select>
            </div>
            <?php 
        }
        ?>
            <button type="submit">Enviar</button>
        </form>

    </div>


    
    <script src="../../assets/js/ocultarInfo.js"></script>
    <script src="../../assets/js/mensajeEmergente.js"></script>
    <script src="../../assets/js/ventana.js"></script>
    <script src="../../assets/js/form.js"></script>

</body>
</html>