<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/links/moduloConsulta.css">
    <title>Control de Traslados</title>
</head>
<body>
<div class="contenedor">
        <div class="buscador">
            <h2>Control de traslados</h2>
            <form>
                <label for="codigo">Buscar por código:</label>
                <input type="text" id="codigo" class="codigo" name="codigo" placeholder="Ejemplo: 3453"><br><br>

                <label for="documento">Buscar por número de documento:</label>
                <input type="text" id="documento" name="documento" class="codigo" placeholder="Ejemplo: 1073672380"><br><br>

                <button class="perfil-btn" type="submit">Buscar</button>
            </form>
        </div>
        
        <table id="trasladosTable">
            <thead>
                <tr>
                    <th>Código Vacante</th>
                    <th>Coordinación</th>
                    <th>Programa</th>
                    <th>Perfil</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Estado BANIN</th>
                    <th>Vacante Origen</th>
                    <th>Vacante Destino</th>
                    <th>Coordinación Final</th>
                    <th>Sesión de Comité</th>
                    <th>Estado de Traslado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí irían los datos. Por ahora, agregaré algunas filas de ejemplo -->
                <tr>
                    <td>26378</td>
                    <td>Titulada</td>
                    <td>Contabilización de operaciones comerciales y financieras</td>
                    <td>Profesional en contabilidad y finanzas</td>
                    <td>52294893</td>
                    <td>Luz Helena Quintana</td>
                    <td>Seleccionado</td>
                    <td>26378</td>
                    <td>29331</td>
                    <td>COMPLEMENTARIA</td>
                    <td>8</td>
                    <td>Confirmado</td>
                </tr>
                <tr>
                    <td>26378</td>
                    <td>Articulación</td>
                    <td>Sistemas</td>
                    <td>Ingeniero de sistemas</td>
                    <td>52294893</td>
                    <td>Mauricio Cañas López</td>
                    <td>Seleccionado</td>
                    <td>26378</td>
                    <td>29331</td>
                    <td>COMPLEMENTARIA</td>
                    <td>8</td>
                    <td>Confirmado</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <script>
        // Función de búsqueda
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("trasladosTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>