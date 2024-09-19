
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
    require '../../app/config.php'; 
    require '../../app/shareFolder/header.php';
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
            <p><strong>Proyecto / Coordinación:</strong> SER</p>
            <p><strong>Instructor Evaluador:</strong> Rodríguez Ruíz William Rolando</p>
            <p><strong>PROGRAMA DE FORMACION :</strong> EMPRENDEDOR EN ALTERNATIVAS AGROPECUARIAS PARA UNA PRODUCCION SOSTENIBLE</p>
        </div>
        
        <div class="perfilInstructor">
            <div id="profileDescription" class="hidden" style="background-color: #f7f7f7;padding: 20px;border-radius: 8px;border: 1px solid #ccc;margin-bottom: 20px;grid-template-columns: 1fr;gap: 10px;">
                <p><strong>Numero Documento:</strong> 32926</p>
                <p><strong>Nombere:</strong> 29913</p>
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
        <form id="evaluationForm">
            <div class="form-group">
                <label for="formacion">Formación:</label>
                <input type="text" id="formacion" name="formacion">
            </div>

            <div class="form-group">
                <label for="experienciaDocenteString">Experiencia Docente:</label>
                <input type="text" id="experienciaDocenteString" name="experienciaDocenteString">
            </div>

            <div class="form-group">
                <label for="requisitosAdicionales">Requisitos Adicionales:</label>
                <input type="text" id="requisitosAdicionales" name="requisitosAdicionales">
            </div>

            <div class="form-group">
                <label for="cumplePerfil">Cumple Perfil:</label>
                <input type="text" id="cumplePerfil" name="cumplePerfil">
            </div>

            <div class="form-group">
                <label for="observacionNoCumplimiento">Observación No Cumplimiento:</label>
                <input type="text" id="observacionNoCumplimiento" name="observacionNoCumplimiento">
            </div>

            <div class="form-group">
                <label for="experienciaTecnica">Experiencia Técnica (Expresada en años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica" oninput="calculateScore('experienciaTecnica', 2.5)">
            </div>

            <div class="form-group">
                <label for="experienciaDocente">Experiencia Docente (Expresada en años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente" oninput="calculateScore('experienciaDocente', 2.5)">
            </div>

            <div class="form-group">
                <label for="experienciaInstructor">Experiencia Instructor (Expresada en años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor" oninput="calculateScore('experienciaInstructor', 3.5)">
            </div>

            <div class="form-group">
                <label for="experienciaProyectos">Experiencia en formulación de proyectos productivos rurales:</label>
                <input type="number" id="experienciaProyectos" name="experienciaProyectos" oninput="calculateScore('experienciaProyectos', 3)">
            </div>

            <div class="form-group">
                <label for="experienciaRural">Experiencia trabajando con comunidades rurales:</label>
                <input type="number" id="experienciaRural" name="experienciaRural" oninput="calculateScore('experienciaRural', 3)">
            </div>

            <div class="form-group">
                <label for="poblacionVulnerable">Pertenece a población vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable" oninput="calculateScore('poblacionVulnerable', 5)">
            </div>

            <div class="form-group">
                <label for="arraigo">Arraigo:</label>
                <input type="number" id="arraigo" name="arraigo" oninput="calculateScore('arraigo', 2)">
            </div>

            <div class="form-group">
                <label for="certificacionCompetencias">Acredita Certificación de Competencias:</label>
                <input type="number" id="certificacionCompetencias" name="certificacionCompetencias" oninput="calculateScore('certificacionCompetencias', 7)">
            </div>

            <div class="form-group">
                <label for="formacionTrabajo">Presenta Formación para el Trabajo:</label>
                <input type="number" id="formacionTrabajo" name="formacionTrabajo" oninput="calculateScore('formacionTrabajo', 5)">
            </div>

            <div class="form-group">
                <label for="nivelAcademico">Nivel Académico:</label>
                <input type="number" id="nivelAcademico" name="nivelAcademico">
            </div>

            <button type="submit">Enviar</button>
        </form>


    </div>

    <script src="../../assets/js/ocultarInfo.js"></script>
    <script src="../../assets/js/mensajeEmergente.js"></script>
    <script src="../../assets/js/ventana.js"></script>
    <script src="../../assets/js/form.js"></script>
<?php 
require '../shareFolder/footer.php';
?>
</body>
</html>