<?php
// shareFolder/backButton.php

// Función para obtener la URL de la página anterior
function getPreviousPageUrl() {
    if(isset($_SERVER['HTTP_REFERER'])) {
        return $_SERVER['HTTP_REFERER'];
    } else {
        // Si no hay referencia, volvemos a la página de inicio
        return BASE_URL;
    }
}

// HTML para el botón con estilos actualizados
$previousUrl = getPreviousPageUrl();
?>

<style>
    .container-back {
        margin: 20px 0 20px 20px; /* Añadido margen izquierdo */
    }

    .btn-back {
        display: inline-block;
        padding: 8px 15px; /* Reducido el padding para hacer el botón más pequeño */
        font-size: 14px; /* Reducido el tamaño de la fuente */
        font-weight: 500; /* Ajustado el peso de la fuente */
        text-decoration: none;
        color: #ffffff;
        background-color: #4a6fa5; /* Nuevo color que armoniza con el esquema existente */
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-back:hover {
        background-color: #385d8a; /* Color de hover más oscuro */
    }

    .icon-back {
        margin-right: 5px;
    }
</style>

<div class="container-back">
    <a href="<?php echo $previousUrl; ?>" class="btn-back">
        <span class="icon-back">&#8592;</span> Regresar
    </a>
</div>