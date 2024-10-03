<?php
require_once '../../app/config.php';
requireRole(['2']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../../assets/css/links/candidatosCoordinador.css">
</head>
<body>
    <?php
        require '../../app/shareFolder/header.php';
        require '../../app/shareFolder/navbar.php';
        require '../../app/shareFolder/backButton.php';
    ?>

    <div class="contenedor">
        <div class="buscador">
            <h2>Buscador</h2>
            <form>
                <label for="codigo">Buscar por código:</label>
                <input type="text" id="codigo" class="codigo" name="codigo" placeholder="Ejemplo: 3453"><br><br>

                <label for="documento">Buscar por número de documento:</label>
                <input type="text" id="documento" name="documento" class="codigo" placeholder="Ejemplo: 1073672380"><br><br>

                <button class="perfil-btn" type="submit">Buscar</button>
            </form>
        </div>

        <div class="informacionDeconsulta">
            <h2>Información de la Consulta</h2>
            <p><strong>Código:</strong>26378</p>
            <p><strong>Coordinación Inicial:</strong>ARTICULACIÓN</p>
            <p><strong>Programa:</strong>CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS.</p>
        </div>

        <div class="tablaGeneradaPorLaConsulta">
            <h2>Resultados de la Consulta</h2>
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Estado BANIN</th>
                        <th>Coordinación Inicial</th>
                        <th>Coordinación Final</th>
                        <th>Traslado</th>
                        <th>Reclamación</th>
                        <th>Protección</th>
                        <th>Solicitud</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20847</td>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>Seleccionado</td>
                        <td>COMPLEMENTARIA</td>
                        <td>COMPLEMENTARIA</td>
                        <td>Confirmado En 29331
                            <div class="icons">
                                <svg class="btnTrasladar trasladar" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shuffle">
                                    <polyline points="16 3 21 3 21 8"></polyline>
                                    <line x1="4" y1="20" x2="21" y2="3"></line>
                                    <polyline points="21 16 21 21 16 21"></polyline>
                                    <line x1="15" y1="15" x2="21" y2="21"></line>
                                </svg>
                            </div>
                        </td>
                        <td>7-2023-313747</td>
                        <td>7-2023-287082 - NO APROBADA</td>
                        <td style="text-align: center;"><a href="../coordinador/forms.php" ><button class="perfil-btn" type="submit">Editar</button></a></td>
                    </tr>
                    <tr>
                        <td>20847</td>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>Seleccionado</td>
                        <td>COMPLEMENTARIA</td>
                        <td>COMPLEMENTARIA</td>
                        <td>Confirmado En 29331
                            <div class="icons">
                                <svg class="btnTrasladar trasladar" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shuffle">
                                    <polyline points="16 3 21 3 21 8"></polyline>
                                    <line x1="4" y1="20" x2="21" y2="3"></line>
                                    <polyline points="21 16 21 21 16 21"></polyline>
                                    <line x1="15" y1="15" x2="21" y2="21"></line>
                                </svg>
                            </div>
                        </td>
                        <td>7-2023-313747</td>
                        <td>7-2023-287082 - NO APROBADA</td>
                        <td style="text-align: center;"><a href="../coordinador/forms.php" ><button class="perfil-btn" type="submit">Editar</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="modalTraslado" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Formulario de Traslado</h2>
                <form id="formTraslado">
                    <label for="codigo">Código:</label>
                    <textarea id="detallesTraslado" name="detallesTraslado" readonly>20847</textarea>

                    <label for="codigo">Código de Traslado:</label>
                    <input type="text" id="codigo" name="codigo" required>

                    <label for="coordinacionInicial">Coordinación Inicial:</label>
                    <textarea id="detallesTraslado" name="detallesTraslado" readonly>COMPLEMENTARIA</textarea>

                    <label for="coordinacionFinal">Coordinación Final:</label>
                    <select id="coordinacionFinal" name="coordinacionFinal" required>
                        <option value="">Seleccione una opción</option>
                        <option value="ARTICULACIÓN">ARTICULACIÓN</option>
                        <option value="COMPLEMENTARIA">COMPLEMENTARIA</option>
                        <!-- Añade más opciones según sea necesario -->
                    </select>
                    <button type="submit">Enviar Solicitud de Traslado</button>
                </form>
            </div>
        </div>
        
    </div>
    <?php 
    require '../shareFolder/footer.php';
    ?>
    <script>
        // Obtener todos los botones que abren el modal
        var btns = document.querySelectorAll(".btnTrasladar");

        // Obtener el modal
        var modal = document.getElementById("modalTraslado");

        // Obtener el elemento <span> que cierra el modal
        var span = document.getElementsByClassName("close")[0];

        // Asignar evento onclick a cada botón
        btns.forEach(function(btn) {
            btn.onclick = function() {
                modal.style.display = "block";
            };
        });

        // Cuando el usuario hace clic en <span> (x), cerrar el modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Cuando el usuario hace clic fuera del modal, cerrarlo
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>