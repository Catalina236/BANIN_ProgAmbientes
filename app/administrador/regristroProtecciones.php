<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/links/usuariosAdmin.css">
</head>
<body>

    <?php
        require '../../app/config.php'; 
        require '../../app/shareFolder/header.php';
    ?>

    <div class="contenedor">
        <div class="buscador">
            <h2>Buscar</h2>
            <form>
                <label for="buscar"></label>
                <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol">
                <button class="perfil-btn" type="submit">Buscar</button>
            </form>
        </div>
        <div class="buscador">
            <h2>Filtros por roles</h2>
            <button type="button" class="filtro-btn" data-role="Instructor">TITULADA</button>
            <button type="button" class="filtro-btn" data-role="Evaluador">COMPLEMENTARIA</button>
            <button type="button" class="filtro-btn" data-role="Control">SER</button>
        </div>

        <div class="buscador">
            <h2>Información de la Consulta</h2>
            <p><strong>Número de documento:</strong> 1072645387</p>
            <p><strong>Nombre:</strong> No especificado</p>
            <p><strong>Rol:</strong> No especificado</p>
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
                        <th>Traslado</th>
                        <th>Reclamación</th>
                        <th>Protección</th>
                        <th>Editar Información</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>Seleccionado</td>
                        <td>COMPLEMENTARIA</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center;"><a href="../administrador/forms.php"><button class="editar-btn">Editar</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
    <script>
        document.querySelectorAll('.filtro-btn').forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('active');
            });
        });
    </script>

    <?php 
        require '../shareFolder/footer.php';
    ?>
</body>
</html>
