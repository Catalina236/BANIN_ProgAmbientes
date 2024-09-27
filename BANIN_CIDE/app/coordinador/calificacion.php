<?php
    require_once '../../app/config.php';
    $coordinacion = 'Formación para el Trabajo'; 
    requireRole(['2']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación del Postulados</title>
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
                <h1>Evaluar Postulado</h1>
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
        

        <h2>Formulario de Evaluación</h2>
        <form method="post">
            <div id="formacionTrabajoSection" class="form-group">
                <label for="experienciaTecnica">Calificación Experiencia Técnica (años):</label>
                <input type="number" id="experienciaTecnica" name="experienciaTecnica">
            </div>
            <div class="form-group">
                <label for="experienciaDocente">Calificación Experiencia Docente (años):</label>
                <input type="number" id="experienciaDocente" name="experienciaDocente">
            </div>
            <div class="form-group">
                <label for="experienciaInstructor">Calificación Experiencia Instructor (años):</label>
                <input type="number" id="experienciaInstructor" name="experienciaInstructor">
            </div>
            <div class="form-group">
                <label for="poblacionVulnerable">Calificación Población Vulnerable:</label>
                <input type="number" id="poblacionVulnerable" name="poblacionVulnerable">
            </div>
            <div class="form-group">
                <label for="certificacion">Calificación Certificación Competencias:</label>
                <input type="number" id="certificacion" name="certificacion">
            </div>
            <div class="form-group">
                <label for="formacionL">Calificación Formación Laboral:</label>
                <input type="number" id="formacionL" name="formacionL">
            </div>

            <div class="form-group">
                <label for="coordinacionSelect">Calificación Nivel de Educación:</label>
                <select id="coordinacionSelect">
                    <option value="">Selecciona</option>
                    <option value="tecnico">Técnico profesional</option>
                    <option value="tecnologo">Tecnólogo</option>
                    <option value="profesional">Profesional Universitario</option>
                    <option value="especializacion">Especialización</option>
                    <option value="maestria">Maestría</option>
                    <option value="doctorado">Doctorado</option>
                </select>
            </div>
        </form>
    </div>

    <script src="../../assets/js/evaluar.js"></script>
    <script src="../../assets/js/ocultarInfo.js"></script>
    <script src="../../assets/js/mensajeEmergente.js"></script>
    <script src="../../assets/js/ventana.js"></script>
    <script src="../../assets/js/form.js"></script>
</body>
</html>
