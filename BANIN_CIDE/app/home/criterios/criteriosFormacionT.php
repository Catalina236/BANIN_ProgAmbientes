<?php
    require '../../../app/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../../assets/css/links/criterios.css">
</head>
<body>
    <?php
        require '../../../app/shareFolder/header.php';
        require '../../../app/shareFolder/navbar.php';
    ?>

    <div class="contenedor">
        <h1>FIC - COMPLEMENTARIA VIRTUAL - COMPLEMENTARIA PRESENCIAL - TÉCNICOS - ARTICULACIÓN - VÍCTIMAS (FORMACIÓN PARA EL TRABAJO)</h1>
        <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>CATEGORÍA</th>
                            <th>SUBCATEGORÍA</th>
                            <th>PONDERACIÓN MÁXIMA POR CATEGORÍA</th>
                            <th>PONDERACIÓN SUBCATEGORÍA</th>
                            <th>OBSERVACIÓN</th>
                        </tr>
                    </thead>
                    <tbody class="intenso">
                        <tr class="intenso">
                            <td rowspan="3" class="intenso">Experiencia</td>
                            <td>Técnica</td>
                            <td rowspan="3" id="ponderacion-experiencia"></td>
                            <td id="ponderacion-tecnica" style="background-color: #007bff;color: white;"></td>
                            <td rowspan="3">Puntos por año (12 meses)</td>
                        </tr>
                        <tr>
                            <td>Docente</td>
                            <td id="ponderacion-docente"></td>
                        </tr>
                        <tr>
                            <td>Instructor SENA</td>
                            <td id="ponderacion-instructor"></td>
                        </tr>
                        <tr>
                            <td>Población Vulnerable</td>
                            <td>Lineamientos Circular 01-3-2022-000227</td>
                            <td id="ponderacion-poblacion"></td>
                            <td id="ponderacion-poblacion-subcategoria"></td>
                            <td>Se debe demostrar de acuerdo a los lineamientos Circular 01-3-2022-000227</td>
                        </tr>
                        <tr>
                            <td>Certificación competencias</td>
                            <td>Pedagogía o Técnica</td>
                            <td id="ponderacion-certificacion"></td>
                            <td id="ponderacion-certificacion-subcategoria"></td>
                            <td>No es acumulable. Debe estar vigente la certificación.</td>
                        </tr>
                        <tr>
                            <td>Formación Laboral</td>
                            <td>CAP / Técnico laboral</td>
                            <td id="ponderacion-formacion"></td>
                            <td id="ponderacion-formacion-subcategoria"></td>
                            <td>No es acumulable. Debe ser relacionada con la formación a ejecutar.</td>
                        </tr>
                        <tr>
                            <td rowspan="8">Educación</td>
                            <td>Técnico profesional</td>
                            <td rowspan="8" id="ponderacion-educacion"></td>
                            <td id="ponderacion-tecnico-profesional" style="background-color: #007bff;color: white;"></td>
                            <td rowspan="8">Aplica al máximo nivel académico del aspirante</td>
                        </tr>
                        <tr>
                            <td>Especialización técnica</td>
                            <td id="ponderacion-especializacion-tecnica"></td>
                        </tr>
                        <tr>
                            <td>Tecnología</td>
                            <td id="ponderacion-tecnologia"></td>
                        </tr>
                        <tr>
                            <td>Especialización tecnológica</td>
                            <td id="ponderacion-especializacion-tecnologica"></td>
                        </tr>
                        <tr>
                            <td>Profesional universitario</td>
                            <td id="ponderacion-profesional-universitario"></td>
                        </tr>
                        <tr>
                            <td>Especialización</td>
                            <td id="ponderacion-especializacion"></td>
                        </tr>
                        <tr>
                            <td>Maestría</td>
                            <td id="ponderacion-maestria"></td>
                        </tr>
                        <tr>
                            <td>Doctorado</td>
                            <td id="ponderacion-doctorado"></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    <?php 
    require '../../shareFolder/footer.php';
    ?>
    <script src="../../../assets/js/criterios.js"></script>

</body>
</html>