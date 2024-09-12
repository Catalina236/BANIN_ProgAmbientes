<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/usuariosAdmin.css">
    <link rel="stylesheet" href="../../assets/css/administrador/usuarios.css">
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
            <button type="button" class="filtro-btn" data-role="Instructor">Instructor</button>
            <button type="button" class="filtro-btn" data-role="Evaluador">Evaluador</button>
            <button type="button" class="filtro-btn" data-role="Control">Control</button>
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Número de documento</th>
                        <th>Rol</th>
                        <th style="text-align: center;">Editar</th>
                        <th style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>1072645387</td>
                        <td>Evaluador</td> 
                        <td style="text-align: center;"><a href="../administrador/formEditarUsuario.php"><button class="editar-btn">Editar</button></a></td>
                        <td style="text-align: center;"><a href="eliminarUsuario.php"><button class="eliminar-btn">Eliminar</button></a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <div id="modalEliminar" class="modal">
        <div class="modal-content">
            <h2>Confirmar Eliminación</h2>
            <p>¿Estás seguro de que deseas eliminar este usuario?</p>
            <div class="modal-buttons">
                <button id="confirmar" class="confirmar-btn">Sí, eliminar</button>
                <button id="cancelar" class="cancelar-btn">Cancelar</button>
            </div>
        </div>
    </div>



    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>
    <script src="../../assets/js/mensajeEliminar.js"></script>
</body>
</html>
