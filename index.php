<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>BANIN</title>
</head>
<body>
    <?php
        require './app/config.php';
        require './app/shareFolder/header.php';
    ?>
<div class="contenedor">
<div class="slider">
    <div class="slides">
        <img src="assets/img/banners/Imagen.jpg" alt="">
        <img src="assets/img/banners/imagenfondo.jpg" alt="">
        <img src="assets/img/banners/instructorSENA.jpg" alt="Imagen 3">
    </div>
    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
</div>
    <section class="boxes">
    <div class="desc 1">
        <h2>Descripción del sistema</h2>
        <p>BANIN(Banco de Instructores) es una plataforma diseñada para facilitar la evaluación exhaustiva y objetiva de nuestros instructores. Permite a los evaluadores acceder a perfiles, realizar evaluaciones y generar informes detallados.</p>
    </div>
    <div class="desc 2">
        <h2>Características</h2>
        <li>Evaluación de competencias pedagógicas</li>
        <li>Análisis de habilidades técnicas</li>
        <li>Revisión de experiencia y trayectoria</li>
        <li>Informes personalizados</li>
        <li>Seguimiento de progreso</li>
    </div>
    <div class="desc 3">
        <h2>Acceso al Sistema</h2>
        <p>Si eres un evaluador autorizado, ingresa al sistema utilizando tus credenciales. Si necesitas asistencia o tienes preguntas sobre el proceso de evaluación, contacta a nuestro equipo de soporte.</p>
        <?php
        if(!isset($_SESSION['id_rol']) && !isset($_SESSION['numero_documento'])):?>
            <button><a href="app/home/iniciarsesion.php">Acceder</a></button>
        <?php else:?>
        <?php endif;?>
    </div>
    </section>
</div>
<?php 
require 'app/shareFolder/footer.php'
?>
<script src="assets/JS/slider.js"></script>
</body>
</html>