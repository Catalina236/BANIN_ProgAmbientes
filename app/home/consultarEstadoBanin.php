<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../../assets/css/links/moduloConsulta.css">
</head>
<body>
    <?php
        require '../../app/config.php';
        require '../../app/shareFolder/header.php';
    ?>
    <?php
        require '../../app/shareFolder/navbar.php';
    ?>
    <div class="contenedor">
        <div class="buscador">
            <h2>Buscador</h2>
            <form>
                <label for="documento">Buscar por número de documento:</label>
                <input type="text" id="documento" name="documento" class="codigo" placeholder="Ejemplo: 1073672380"><br><br>

                <button class="perfil-btn" type="submit">Buscar</button>
            </form>
        </div>

        <div class="buscador">
            <h2>Información de la Consulta</h2>
            <p><strong>Documento:</strong>26378</p>
            <p><strong>Coordinación Inicial:</strong>ARTICULACIÓN</p>
            <p><strong>Programa:</strong>CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS.</p>
        </div>

        <div class="tablaGeneradaPorLaConsulta">
            <h2>Resultados de la Consulta</h2>
            <table>
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Estado BANIN</th>
                        <th>Coordinación Final</th>
                        <?php if(isset($_SESSION['id_rol']) && $_SESSION['id_rol']=='1'):?>
                            <th>Traslado</th>
                            <th>Reclamación</th>
                            <th>Protección</th>
                            <th>Editar</th>
                        <?php elseif(isset($_SESSION['id_rol'])=='3' || $_SESSION['id_rol']=='2'):?>
                            <th>Traslado</th>
                            <th>Reclamación</th>
                            <th>Protección</th>
                        <?php else:?>
                        <?php endif;?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>Seleccionado</td>
                        <td>COMPLEMENTARIA</td>
                        <?php if(isset($_SESSION['id_rol']) && $_SESSION['id_rol']=='1'):?>
                        <td>Confirmado En 29331</td>
                        <td>7-2023-313747</td>
                        <td>7-2023-287082 - NO APROBADA</td>
                        <td style="text-align: center;"><a href="../administrador/forms.php"><button class="editar-btn">Editar</button></a></td>
                        <?php elseif(isset($_SESSION['id_rol'])=='3' || $_SESSION['id_rol']=='2'):?>
                        <td>Confirmado En 29331</td>
                        <td>7-2023-313747</td>
                        <td>7-2023-287082 - NO APROBADA</td>
                        <?php else:?>
                        <?php endif;?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
    require '../shareFolder/footer.php';
    ?>
</body>
</html>