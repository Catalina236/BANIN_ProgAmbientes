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
    <style>
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 200px;
            height: 34px;
            margin-bottom: 20px;
        }
        
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #2196F3;
            transition: .4s;
            border-radius: 34px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: #2196F3;
        }
        
        input:checked + .slider:before {
            transform: translateX(166px);
        }
        
        .slider-text {
            color: white;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            pointer-events: none;
        }
        
        .slider-text.left {
            left: 50px;
        }
        
        .slider-text.right {
            right: -40px;
        }
        
        #usuariosView {
            display: block; /* Muestra la vista de usuarios por defecto */
        }

        #candidatosView {
            display: none; /* Oculta la vista de candidatos por defecto */
        }
    </style>
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>

    <div class="contenedor">
        <label class="toggle-switch">
            <input type="checkbox" id="viewToggle">
                <span class="slider">
                    <span class="slider-text left">Usuarios</span>
                    <span class="slider-text right">Candidatos</span>
                </span>
        </label>
            
        <div id="usuariosView"><!-- gestionar usuarios-->
            <div class="buscador">
                <h2>Buscar</h2>
                <form class="formBusqueda">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
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
            
        <div id="candidatosView"> <!-- gestionar Candidatos-->
            <div class="buscador">
                <h2>Buscar</h2>
                <form class="formBusqueda">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
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


