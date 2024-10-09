<?php
require_once '../../sql/class.php';
require_once '../../app/config.php';
requireRole(['1']);
$trabajo = new Trabajo();
$datos = $trabajo->buscar_usuario('');

$vista = isset($_GET['vista']) ? $_GET['vista'] : (isset($_SESSION['vista']) ? $_SESSION['vista'] : 'usuarios');
$_SESSION['vista'] = $vista;
$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$resultados_por_pagina = 15;

if ($vista == 'usuarios') {
    $datos = $trabajo->ver_usuarios();
    $busqueda = isset($_GET['buscar']) ? $_GET['buscar'] : '';
    $datos_busqueda = $trabajo->buscador($busqueda);
} else {
    // Lógica para la vista de candidatos
    if (!empty($filtro)) {
        $datosPaginados = $trabajo->buscador($filtro, $paginaActual, $resultados_por_pagina);
    } else {
        $datosPaginados = $trabajo->ver_candidatos($paginaActual, $resultados_por_pagina);
    }
}
?>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>

    <div class="contenedor">
        <label class="toggle-switch">
            <input type="checkbox" id="viewToggle" <?php echo $vista == 'candidatos' ? 'checked' : ''; ?>>
            <span class="slider">
                <span class="slider-text left">Usuarios</span>
                <span class="slider-text right">Candidatos</span>
            </span>
        </label>
            
        <div id="usuariosView" style="display: <?php echo $vista == 'usuarios' ? 'block' : 'none'; ?>">
            <div class="buscador">
                <h2>Buscar</h2>
                <form class="formBusqueda" method="get">
                    <input type="hidden" name="vista" value="usuarios">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
                    <button class="perfil-btn" type="submit">Buscar</button>
                </form>
            </div>
            <div class="buscador">
                <h2>Filtros por roles</h2>
                <a href="?vista=usuarios&filtro=Instructor" class="filtro-btn">Instructor</a>
                <a href="?vista=usuarios&filtro=Evaluador" class="filtro-btn">Evaluador</a>
                <a href="?vista=usuarios&filtro=Control" class="filtro-btn">Control</a>
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
                            <td style="text-align: center;"><a href="../administrador/formEditarUsuario.php?numero=<?php echo $row['numero_documento'];?>&vista=usuarios"><button class="editar-btn">Editar</button></a></td>
                            <td style="text-align: center;"><a onclick="return confirmacion()" href="../administrador/eliminar.php?numero=<?php echo $row['numero_documento'];?>&vista=usuarios"><button class="eliminar-btn">Eliminar</button></a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="candidatosView" style="display: <?php echo $vista == 'candidatos' ? 'block' : 'none'; ?>">
            <div class="buscador">
                <h2>Buscar</h2>
                <form class="formBusqueda" method="get">
                    <input type="hidden" name="vista" value="candidatos">
                    <label for="buscar"></label>
                    <input type="text" id="buscar" name="buscar" class="codigo" placeholder="Buscar por documento, nombre o rol"><br>
                    <button class="perfil-btn" type="submit">Buscar</button>
                </form>
            </div>
            <div class="buscador">
                <h2>Filtros por roles</h2>
                <a href="?vista=candidatos&filtro=TITULADA" class="filtro-btn">TITULADA</a>
                <a href="?vista=candidatos&filtro=COMPLEMENTARIA" class="filtro-btn">COMPLEMENTARIA</a>
                <a href="?vista=candidatos&filtro=SER" class="filtro-btn">SER</a>
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
                            <?php if(isset($_SESSION['id_rol']) && ($_SESSION['id_rol'] == '2' || $_SESSION['id_rol'] == '1')):?>
                                <th>Traslado</th>
                                <th>Reclamación</th>
                                <th>Protección</th>
                                <th>Editar</th>
                            <?php elseif(isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == '3'):?>
                                <th>Traslado</th>
                                <th>Reclamación</th>
                                <th>Protección</th>
                            <?php endif;?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datosPaginados['resultados'] as $row1){?>
                        <tr>
                            <td><?php echo $row1['numero_documento'];?></td>
                            <td><?php echo $row1['nombre_completo'];?></td>
                            <td><?php echo $row1['estadoBANIN'];?></td>
                            <td><?php echo $row1['nombre_c'];?></td>
                            <?php if(isset($_SESSION['id_rol']) && ($_SESSION['id_rol'] == '2' || $_SESSION['id_rol'] == '1')):?>
                                <td><?php echo $row1['traslado'];?></td>
                                <td><?php echo $row1['reclamacion'];?></td>
                                <td><?php echo $row1['proteccion'];?></td>
                                <td style="text-align: center;"><a href="../administrador/forms.php?vista=candidatos"><button class="editar-btn">Editar</button></a></td>
                            <?php elseif(isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == '3'):?>
                                <td><?php echo $row1['traslado'];?></td>
                                <td><?php echo $row1['proteccion'];?></td>
                                <td><?php echo $row1['reclamacion'];?></td>
                            <?php endif;?>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <?php
                if ($paginaActual > 1) {
                    $pagina_anterior = $paginaActual - 1;
                    echo "<a href='panelControl.php?pagina=$pagina_anterior&vista=candidatos' class='enlace'>Anterior</a>";
                }
                if($datosPaginados['totalPaginas'] > 2){
                    for ($i = 1; $i <= $datosPaginados['totalPaginas']; $i++) {
                        echo "<a class='enlace' href='panelControl.php?pagina=$i&vista=candidatos'> $i </a> ";
                    }
                }
                if ($paginaActual < $datosPaginados['totalPaginas']) {
                    $siguiente_pagina = $paginaActual + 1;
                    echo "<a class='enlaces' href='panelControl.php?pagina=$siguiente_pagina&vista=candidatos'>Siguiente</a> <br>";
                }
                ?>
            </div>
        </div>
    </div>
    <?php 
        require '../shareFolder/footer.php';
    ?>

    <script>
    function confirmacion(){
        return confirm('¿Desea borrar el registro?');
    }

    document.getElementById('viewToggle').addEventListener('change', function() {
        const vista = this.checked ? 'candidatos' : 'usuarios';
        window.location.href = `panelControl.php?vista=${vista}`;
    });

    document.querySelectorAll('.enlaces, .enlace').forEach(link => {
        if (!link.href.includes('vista=')) {
            link.href = link.href + (link.href.includes('?') ? '&' : '?') + 'vista=<?php echo $vista; ?>';
        }
    });
    </script>
</body>
</html>