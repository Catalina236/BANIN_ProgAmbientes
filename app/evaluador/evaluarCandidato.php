<?php
require_once '../../app/config.php';

$coordinacion = 'Formación para el Trabajo'; 
requireRole(['3','2']);
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
        <div class="info-container" id="infoContainer">
            <p><strong>Codigo BANIN:</strong> 32926</p>
            <p><strong>Codigo Contratación postulación APE:</strong> 29913</p>
            <p><strong>Link APE:</strong> <a href="<?php echo'codigo para optener el link'?>">link</a></p>
            <p><strong>Proyecto / Coordinación:</strong> <span id="coordinacion"><?php echo $coordinacion; ?></span></p>
            <p><strong>Instructor Evaluador:</strong> Rodríguez Ruíz William Rolando</p>
            <p><strong>PROGRAMA DE FORMACION :</strong> EMPRENDEDOR EN ALTERNATIVAS AGROPECUARIAS PARA UNA PRODUCCION SOSTENIBLE</p>
        </div>
        
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

            <!-- Sección de Formación para el Trabajo -->
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">
            </div>
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="poblacionVulnerable">Poblacion Vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable">
            </div>
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="certificacion">Certificación competencias:</label>
                <input type="number" id="certificacion" name="certificacion">
            </div>
            <div id="formacionTrabajoSection" class="form-group" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
                <label for="formacionL">Formación Laboral:</label>
                <input type="number" id="formacionL" name="formacionL">
            </div>
            <div class="formacionTrabajoSection" style="<?php echo ($coordinacion === 'Formación para el Trabajo') ? 'display:block;' : 'display:none;'; ?>">
            <label for="coordinacionSelect">Nivel de Educacion:</label>
                <select id="coordinacionSelect" onchange="mostrarSecciones()">
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

            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">
            </div>
            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="poblacionVulnerable">Poblacion Vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable">
            </div>
            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="certificacion">Certificación competencias:</label>
                <input type="number" id="certificacion" name="certificacion">
            </div>
            <div id="educacionFormalSection" class="form-group" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
                <label for="formacionL">Formación Laboral:</label>
                <input type="number" id="formacionL" name="formacionL">
            </div>
            <div class="educacionFormalSection" style="<?php echo ($coordinacion === 'Educación Formal') ? 'display:block;' : 'display:none;'; ?>">
            <label for="coordinacionSelect">Nivel de Educacion:</label>
                <select id="coordinacionSelect" onchange="mostrarSecciones()">
                    <option value="">Selecciona</option>
                    <option value="especializacionPr">Técnico profesional</option>
                    <option value="especializaciontn">Especialización técnica</option>
                    <option value="tecnologia">Tecnologo</option>
                    <option value="especializaciontg">Especialización tecnológica</option>
                    <option value="profesional">Profesional Universitario</option>
                    <option value="especializaciontn">Especialización</option>
                    <option value="maestria">Maestría/Doctorado</option>
                </select>
            </div>

            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaTecnicaSer">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnicaSer" name="experienciaTecnicaSer">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaDocenteSer">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocenteSer" name="experienciaDocenteSer">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaInstructorSer">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructorSer" name="experienciaInstructorSer">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciaProyecto">Experiencia formación de proyectos:</label>
                <input type="number" id="experienciaProyecto" name="experienciaProyecto">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="experienciacomunidad">Experiencia trabajo con comunidades rurales:</label>
                <input type="number" id="experienciacomunidad" name="experienciacomunidad">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="poblacionVul">Población Vulnerable:</label>
                <input type="number" id="poblacionVul" name="poblacionVul">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="arraigo">Arraigo:</label>
                <input type="number" id="arraigo" name="arraigo">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="certificacionCon">Certificación competencias</label>
                <input type="number" id="certificacionCon" name="certificacionCon">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
                <label for="formacionLaboral">Formación Laboral</label>
                <input type="number" id="formacionLaboral" name="formacionLaboral">
            </div>
            <div class="serSection" style="<?php echo ($coordinacion === 'SER') ? 'display:block;' : 'display:none;'; ?>">
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

            <button type="submit">Enviar</button>
        </form>

    </div>


    
    <script src="../../assets/js/ocultarInfo.js"></script>
    <script src="../../assets/js/mensajeEmergente.js"></script>
    <script src="../../assets/js/ventana.js"></script>
    <script src="../../assets/js/form.js"></script>

</body>
</html>