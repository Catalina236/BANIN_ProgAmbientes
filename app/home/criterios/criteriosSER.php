<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnólogos - Educación Formal</title>
    <link rel="stylesheet" href="../../../assets/css/links/criteriosSER.css">
</head>

<body>
    <?php
        require '../../../app/config.php'; 
        require '../../../app/shareFolder/header.php';
    ?>

    <div class="contenedor">
        <h1>SER</h1>
        <table class="ser-table">
            <thead>
                <tr>
                    <th>CATEGORÍA</th>
                    <th>SUBCATEGORÍA</th>
                    <th>PONDERACIÓN MÁXIMA POR CATEGORÍA</th>
                    <th>PONDERACIÓN SUBCATEGORÍA</th>
                    <th>OBSERVACIÓN</th>
                </tr>
            </thead>
            <tbody>
                <tr class="categoria">
                    <td rowspan="5">Experiencia</td>
                    <td class="subcategoria">Técnica</td>
                    <td rowspan="5" id="ser_exp_max"></td>
                    <td id="ser_exp_tecnica"></td>
                    <td rowspan="5">Puntos por año (12 meses)</td>
                </tr>
                <tr>
                    <td class="subcategoria">Docente</td>
                    <td id="ser_exp_docente"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Instructor SENA</td>
                    <td id="ser_exp_instructor"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Experiencia en formación de proyectos productivos rurales.</td>
                    <td id="ser_exp_proyectos"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Experiencia en trabajo con comunidades rurales en temáticas de emprendimiento y/o innovación rural.</td>
                    <td id="ser_exp_comunidades"></td>
                </tr>
                <tr class="categoria">
                    <td>Población Vulnerable</td>
                    <td class="subcategoria">lineamientos Circular 01-3-2022-000227</td>
                    <td id="ser_pob_max"></td>
                    <td id="ser_pob_lineamientos"></td>
                    <td>Se debe demostrar de acuerdo a los lineamientos Circular 01-3-2022-000227</td>
                </tr>
                <tr class="categoria">
                    <td>Población Vulnerable</td>
                    <td class="subcategoria">Consideraciones particulares Comité de Selección Instructores - programa SENA Emprende Rural 23/11/2023</td>
                    <td id="ser_pob_cons_max"></td>
                    <td id="ser_pob_consideraciones"></td>
                    <td>CRITERIO DE ARRAIGO (Reside en el mismo municipio, nacimiento en el mismo municipio, reside en un municipio a menos de 25 km)</td>
                </tr>
                <tr class="categoria">
                    <td>Arraigo</td>
                    <td class="subcategoria">Pedagogía o Técnica</td>
                    <td id="ser_arraigo_max"></td>
                    <td id="ser_arraigo_pedagogia"></td>
                    <td>No es acumulable. Debe estar vigente la Certificación.</td>
                </tr>
                <tr class="categoria">
                    <td>Certificación competencias</td>
                    <td class="subcategoria">CAP / Técnico laboral</td>
                    <td id="ser_cert_max"></td>
                    <td id="ser_cert_cap"></td>
                    <td>No es acumulable. Debe ser relacionada con la formación a ejecutar</td>
                </tr>
                <tr class="categoria">
                    <td>Formación Laboral</td>
                    <td class="subcategoria">Técnico profesional</td>
                    <td rowspan="8" id="ser_edu_max"></td>
                    <td id="ser_edu_tecnico"></td>
                    <td rowspan="8">Aplica al máximo nivel académico del aspirante</td>
                </tr>
                <tr>
                    <td rowspan="7">Educación</td>
                    <td class="subcategoria">Especialización técnica</td>
                    <td id="ser_edu_esp_tecnica"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Tecnología</td>
                    <td id="ser_edu_tecnologia"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Especialización tecnológica</td>
                    <td id="ser_edu_esp_tecnologica"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Profesional Universitario</td>
                    <td id="ser_edu_profesional"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Especialización</td>
                    <td id="ser_edu_especializacion"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Maestría</td>
                    <td id="ser_edu_maestria"></td>
                </tr>
                <tr>
                    <td class="subcategoria">Doctorado</td>
                    <td id="ser_edu_doctorado"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>
    <script src="../../../assets/js/criteriosSER.js"></script>
</body>
</html>