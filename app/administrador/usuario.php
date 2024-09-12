<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/usuariosAdmin.css">
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
                    <td style="text-align: center;"><button class="eliminar-btn" onclick="mostrarModal()">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal personalizado -->
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

<!-- Estilos para el modal -->
<style>
    .modal {
        display: none; /* Oculto por defecto */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        width: 300px;
        text-align: center;
    }

    .modal h2 {
        color: #00ac00;
    }

    .modal p {
        margin: 20px 0;
    }

    .modal-buttons {
        display: flex;
        justify-content: space-around;
    }

    .confirmar-btn, .cancelar-btn {
        background-color: #00ac00;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .cancelar-btn {
        background-color: #ccc;
    }

    .confirmar-btn:hover {
        background-color: #008f00;
    }

    .cancelar-btn:hover {
        background-color: #aaa;
    }
</style>

<!-- JavaScript para controlar el modal -->
<script>
    function mostrarModal() {
        document.getElementById("modalEliminar").style.display = "flex";
    }

    document.getElementById("cancelar").addEventListener("click", function() {
        document.getElementById("modalEliminar").style.display = "none";
    });

    document.getElementById("confirmar").addEventListener("click", function() {
        // Redirigir o ejecutar acción de eliminación
        window.location.href = 'eliminarUsuario.php';
    });
</script>
