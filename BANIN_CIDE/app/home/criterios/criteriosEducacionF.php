<?php
    require '../../../app/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnólogos - Educación Formal</title>
    <link rel="stylesheet" href="../../../assets/css/links/criteriosEducacionF.css">
</head>
<body>
    <?php
        require '../../../app/shareFolder/header.php';
        require '../../../app/shareFolder/navbar.php';
    ?>
    <div class="contenedor">
        <h1>TECNÓLOGOS - (EDUCACIÓN FORMAL)</h1>
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
                <tbody>
                    <tr class="categoria">
                        <td rowspan="3">Experiencia</td>
                        <td class="subcategoria">Técnica</td>
                        <td rowspan="3" id="exp-maxima"></td>
                        <td id="exp-tecnica" style="background-color: #92d050;color: white;"></td>
                        <td rowspan="3" id="exp-observacion"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Docente</td>
                        <td id="exp-docente"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Instructor SENA</td>
                        <td id="exp-instructor"></td>
                    </tr>
                    <tr class="categoria">
                        <td>Población Vulnerable</td>
                        <td class="subcategoria">Lineamientos Circular 01-3-2022-000227</td>
                        <td id="pob-maxima"></td>
                        <td id="pob-vulnerable"></td>
                        <td id="pob-observacion"></td>
                    </tr>
                    <tr class="categoria">
                        <td>Certificación competencias</td>
                        <td class="subcategoria">Pedagogía o Técnica</td>
                        <td id="cert-maxima"></td>
                        <td id="cert-competencias"></td>
                        <td id="cert-observacion"></td>
                    </tr>
                    <tr class="categoria">
                        <td>Formación Laboral</td>
                        <td class="subcategoria">CAP / Técnico laboral</td>
                        <td id="form-maxima"></td>
                        <td id="form-laboral"></td>
                        <td id="form-observacion"></td>
                    </tr>
                    <tr class="categoria">
                        <td rowspan="7">Educación</td>
                        <td class="subcategoria">Técnico profesional</td>
                        <td rowspan="7" id="edu-maxima"></td>
                        <td id="edu-tecnico" style="background-color: #92d050;color: white; font-size:20px"></td>
                        <td rowspan="7" id="edu-observacion"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Especialización técnica</td>
                        <td id="edu-especial-tecnica"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Tecnología</td>
                        <td id="edu-tecnologia"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Especialización tecnológica</td>
                        <td id="edu-especial-tecnologica"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Profesional Universitario</td>
                        <td id="edu-profesional"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Especialización</td>
                        <td id="edu-especializacion"></td>
                    </tr>
                    <tr>
                        <td class="subcategoria">Maestría / Doctorado</td>
                        <td id="edu-maestria"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php 
    require '../../shareFolder/footer.php';
    ?>
    <script src="../../../assets/js/criteriosEducacionFormal.js"></script>
</body>
</html>