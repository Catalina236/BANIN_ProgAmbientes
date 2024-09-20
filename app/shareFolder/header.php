<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASE_URL; ?>assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/img/logos/logoSena_2.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>BANIN</title>
    <style>
/* Estilos generales del header */
header {
    width: 100%;
    background-color: #f8f8f8;
    padding: 10px 0;
}

/* Contenedor del header */
.header-item {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Estilos para el logo */
.logo_sena {
    flex-shrink: 0;
    margin-right: 20px;
}

.logo {
    max-height: 100px;
    width: auto;
    margin-left: 1fr;
}

/* Estilos para el texto BANIN */
.header-item span {
    font-size: 24px;
    font-weight: bold;
    margin: 0 20px;
    white-space: nowrap;
}

/* Estilos para la sección del ministerio */
.ministerio {
    display: flex;
    align-items: center;
    margin-left: auto;
}

.ministerio img {
    max-height: 40px;
    width: 100%;
    margin-left: 10px;
    max-height: 100px;
}

.contBANIN{
    background-color: black;
    display: flex;
    justify-content: start;
    align-items: center;
    height: 100px;
    width: 2px;
}

/* Media queries para ajustar el diseño responsivo */
@media (max-width: 1024px) {
    .header-item {
        justify-content: space-between;
        padding: 0 10px;
    }

    .header-item span {
        font-size: 20px;
        margin: 0 10px;
    }

    .ministerio img {
        max-height: 70px;
    }
}

@media (max-width: 768px) {
    .header-item span {
        font-size: 18px;
        margin: 0 5px;
    }

    .ministerio img {
        max-height: 50px;
        margin-left: 5px;
    }
}

/* Para pantallas muy pequeñas, mantener solo el logo */
@media (max-width: 480px) {
    .header-item {
        justify-content: center;
    }
    
    .header-item span,.contBANIN,
    .ministerio {
        display: none;
    }
}

/* Para pantallas grandes, los elementos se despegan de los laterales */
@media (min-width: 1025px) {
    .header-item {
        padding-left: 40px;
        padding-right: 40px;
    }
}
    </style>
</head>
<body>
<header>
    <div class="header-item">
        <div class="logo_sena">
            <img class="logo" src="<?php echo BASE_URL; ?>assets/img/logos/logosena.png" alt="SENA logo">
        </div>
        <div class="contBANIN">
        <span class="banin">BANIN</span>
        </div>
        <div class="ministerio">
            <img class="ad-banner" src="https://agenciapublicadeempleo.sena.edu.co/PublishingImages/Imagenes%20APE/right-cabezote.png" alt="Ministerio de trabajo">
        </div>
    </div>
</header>
</body>
</html>
