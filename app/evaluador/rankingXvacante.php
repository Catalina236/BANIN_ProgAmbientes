<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postulados</title>
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/listaCandidatos.css">
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
            <p><strong>Proyecto / Coordinación:</strong> SER</p>
            <p><strong>Instructor Evaluador:</strong> Rodríguez Ruíz William Rolando</p>
            <p><strong>PROGRAMA DE FORMACION :</strong> EMPRENDEDOR EN ALTERNATIVAS AGROPECUARIAS PARA UNA PRODUCCION SOSTENIBLE</p>
        </div>
        <div class="perfilInstructor">
            <h1 id="profileDescription" class="hidden" style="background-color: #f7f7f7;padding: 20px;border-radius: 8px;border: 1px solid #ccc;margin-bottom: 20px;grid-template-columns: 1fr;gap: 10px;">
                Opción 1: título de profesional como médico veterinario, médico veterinario y zootecnista, zootecnista. 
                Opción 2: tecnólogo y/o técnico en producción animal, producción agropecuaria. Experiencia laboral: 
                experiencia comprobada en producción animal, sanidad animal, agroecología y/o desarrollo rural como mínimo 
                6 meses en docencia y un año en el área.
            </h1>
        </div>

        <p><strong>Perfil Vacante:</strong> 
            <button class="perfil-btn" type="submit" id="toggleButton">Mostrar</button>
        </p>
        
        <table>
            <thead>
                <tr>
                    <th>NUMERO DE CEDULA</th>
                    <th>Nombre</th>
                    <th>Estado BANIN</th>
                    <th style="text-align: center;">Evaluado</th>
                    <th style="text-align: center;">Evaluar</th>
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
                        <a href="/dashboard/BANIN_ProgAmbientes/app/evaluador/evaluarCandidato.php"><button class="perfil-btn" type="submit">Evaluar</button></a>
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
                        <a href="/dashboard/BANIN_ProgAmbientes/app/evaluador/evaluarCandidato.php"><button class="perfil-btn" type="submit">Evaluar</button></a>
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
                        <a href="/dashboard/BANIN_ProgAmbientes/app/evaluador/evaluarCandidato.php"><button class="perfil-btn" type="submit">Evaluar</button></a>
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
                        <a href="/dashboard/BANIN_ProgAmbientes/app/evaluador/evaluarCandidato.php"><button class="perfil-btn" type="submit">Evaluar</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>
    <script src="../../assets/js/ocultarInfo.js"></script>
</body>
</html>