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

    <!-- Updated loading overlay -->
    <div id="loadingOverlay" class="overlay">
        <div class="spinner-container">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Main content -->
    <div id="mainContent" class="contenedor">
        <label class="toggle-switch">
            <input type="checkbox" id="viewToggle">
            <span class="slider">
                <span class="slider-text left">Usuarios</span>
                <span class="slider-text right">Candidatos</span>
            </span>
        </label>
        
        <div id="usuariosView"><!-- gestionar usuarios-->
            <div class="buscador">
                <h2 class="titulo">Buscar</h2>
                <form class="formBusqueda">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
                    <button class="perfil-btn" type="submit">Buscar</button>
                </form>
            </div>
            <div class="buscador">
                <h2 class="subTitulo">Filtros por roles</h2>
                <button type="button" class="filtro-btn" data-role="Instructor">Instructor</button>
                <button type="button" class="filtro-btn" data-role="Evaluador">Evaluador</button>
                <button type="button" class="filtro-btn" data-role="Control">Control</button>
            </div>
            
            <div class="infoConsulta">
                <h2 class="tituloConsulta">Información de la Consulta</h2>
                <p><strong>Número de documento:</strong> 1072645387</p>
                <p><strong>Nombre:</strong> No especificado</p>
                <p><strong>Rol:</strong> No especificado</p>
            </div>
            <div style="margin-top:13px;margin-bottom:13px">
                <h2>Resultados de la Consulta</h2>
            </div>
            <a href="<?php echo BASE_URL; ?>app/administrador/formAgregarUsuario.php"><button class="perfil-btn" type="submit">Agregar Usuario</button></a>
            <div class="tablaGeneradaPorLaConsulta">
                    <table>
                        <thead>
                            <tr>
                                <th class="boerder_left">Id rol</th>
                                <th>Número de documento</th>
                                <th>Tipo de documento</th>
                                <th>Nombre completo</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Rol</th>
                                <th style="text-align: center;">Editar</th>
                                <th class="boerder_right" style="text-align: center;">Eliminar</th>
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
        
        <div id="candidatosView"><!-- gestionar Candidatos-->
            <div class="buscador">
                <h2 class="titulo">Buscar</h2>
                <form class="formBusqueda">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
                    <button class="perfil-btn" type="submit">Buscar</button>
                </form>
            </div>
            <div class="buscador">
                <h2 class="subTitulo">Filtros por roles</h2>
                <button type="button" class="filtro-btn" data-role="Instructor">TITULADA</button>
                <button type="button" class="filtro-btn" data-role="Evaluador">COMPLEMENTARIA</button>
                <button type="button" class="filtro-btn" data-role="Control">SER</button>
            </div>

            <div class="infoConsulta">
                <h2 class="tituloConsulta">Información de la Consulta</h2>
                <p><strong>Número de documento:</strong> 1072645387</p>
                <p><strong>Nombre:</strong> No especificado</p>
                <p><strong>Rol:</strong> No especificado</p>
            </div>

            <div class="tablaGeneradaPorLaConsulta">
                <table>
                    <thead>
                        <tr>
                            <th class="boerder_left">Documento</th>
                            <th>Nombre</th>
                            <th>Estado BANIN</th>
                            <th>Coordinación Final</th>
                            <th>Traslado</th>
                            <th>Reclamación</th>
                            <th>Protección</th>
                            <th class="boerder_right">Editar Información</th>
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
    </div>
    
    <?php 
        require '../shareFolder/footer.php';
    ?>

<script>
function confirmacion(){
    var respuesta=confirm('¿Desea borrar el registro?');
    return respuesta;
}
</script>
<script>
document.querySelectorAll('.filtro-btn').forEach(button => {
    button.addEventListener('click', () => {
        button.classList.toggle('active');
    });
});
</script>
<!-- Updated JavaScript for loading behavior -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('loadingOverlay');
    const mainContent = document.getElementById('mainContent');
    
    // Simulate loading time (2 seconds)
    setTimeout(() => {
        // Remove overlay
        overlay.style.display = 'none';
        
        // Make content fully visible
        mainContent.classList.add('loaded');
    }, 2000);
});
</script>

<!-- Script for toggling between Users and Candidates views -->
<script>
document.getElementById('viewToggle').addEventListener('change', function() {
    const usuariosView = document.getElementById('usuariosView');
    const candidatosView = document.getElementById('candidatosView');
    
    if (this.checked) {
        usuariosView.style.display = 'none';
        candidatosView.style.display = 'block';
    } else {
        usuariosView.style.display = 'block';
        candidatosView.style.display = 'none';
    }
});
</script>
</body>
</html>
<!-- 
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
</script> -->
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
<!-- 
<script>
    document.querySelectorAll('.filtro-btn').forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
        });
    });
</script>
    <script>
    document.querySelectorAll('.filtro-btn').forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
        });
    });
</script>
<script>
    document.getElementById('viewToggle').addEventListener('change', function() {
        const usuariosView = document.getElementById('usuariosView');
        const candidatosView = document.getElementById('candidatosView');
        
        if (this.checked) {
            usuariosView.style.display = 'none';
            candidatosView.style.display = 'block';
        } else {
            usuariosView.style.display = 'block';
            candidatosView.style.display = 'none';
        }
        // Código de depuración
    //     console.log('Toggle button:', document.getElementById('viewToggle'));
    //     console.log('Usuarios view:', document.getElementById('usuariosView'));
    //     console.log('Candidatos view:', document.getElementById('candidatosView'));

    }); -->    
