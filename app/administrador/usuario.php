<?php
require_once '../../sql/class.php';
require_once '../../app/config.php';
requireRole(['1']);
$trabajo=new Trabajo();
$datos=$trabajo->ver_usuarios();
?>
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
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
    ?>

<div class="contenedor">
    <div class="buscador-contenedor">
        <div class="buscador">
            <h2>Buscar</h2>
            <form>
                <label for="buscar"></label>
                <div class="buscador-flex">
                <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol" required>
                <button class="perfil-btn" type="submit">Buscar</button>
            </div>
            </form>
        </div>
        <!--<aside class="menu">
            <ul>
                <li><a href="usuario.php">Gestionar usuarios</a></li>
                <li><a href="gestionarCandidato.php">Gestionar candidatos</a></li>
                <li><a href="actualizarDatoBANIN.php">Actualizar Datos BANIN
                </a></li>
            </ul>
        </aside>-->
    </div>
    <div class="buscador">
        <h2>Filtros por roles</h2>
        <button type="button" class="filtro-btn" data-role="Instructor">Instructor</button>
        <button type="button" class="filtro-btn" data-role="Evaluador">Evaluador</button>
        <button type="button" class="filtro-btn" data-role="Control">Control</button>
    </div>
    <div class="informacionDeconsulta">
        <h2>Información de la Consulta</h2>
        <p><strong>Número de documento:</strong> 1072645387</p>
        <p><strong>Nombre:</strong> No especificado</p>
        <p><strong>Rol:</strong> No especificado</p>
    </div>

    <a href="<?php echo BASE_URL; ?>app/administrador/formAgregarUsuario.php"><button class="perfil-btn" type="submit">Agregar Usuario</button></a>

    <div class="tablaGeneradaPorLaConsulta">
        <h2>Resultados de la Consulta</h2>
        <table>
            <thead>
                <tr>
                    <th>Id rol</th>
                    <th>Número de documento</th>
                    <th>Tipo de documento</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th style="text-align: center;">Editar</th>
                    <th style="text-align: center;">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $row){?>
                <tr>
                    <td><?php echo $row['id_rol'];?></td>
                    <td><?php echo $row['numero_documento'];?></td>
                    <td><?php echo $row['tipo_doc'];?></td>
                    <td><?php echo $row['nombre_completo'];?></td>
                    <td><?php echo $row['telefono'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['nombre_rol'];?></td> 
                    <td style="text-align: center;"><a href="../administrador/formEditarUsuario.php?numero=<?php echo $row['numero_documento'];?>"><button class="editar-btn">Editar</button></a></td>
                    <td style="text-align: center;"><a onclick="return confirmacion()" href="../administrador/eliminar.php?numero=<?php echo $row['numero_documento'];?>"><button class="eliminar-btn">Eliminar</button></a></td>

                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
    <script>
        function confirmacion(){
            var respuesta=confirm('¿Desea borrar el registro?');
            if(respuesta==true){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    <!-- Modal personalizado -->
    <!--<div id="modalEliminar" class="modal">
        <div class="modal-content">
            <h2>Confirmar Eliminación</h2>
            <p>¿Estás seguro de que deseas eliminar este usuario?</p>
            <div class="modal-buttons">
                <button id="confirmar" class="confirmar-btn">Sí, eliminar</button>
                <button id="cancelar" class="cancelar-btn">Cancelar</button>
            </div>
        </div>
    </div>
    <script src="../../assets/js/mensajeEliminar.js"></script>---->

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
