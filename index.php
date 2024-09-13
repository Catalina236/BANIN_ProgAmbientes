<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/links/styles.css">
    <title>BANIN</title>
</head> 
<body>
    <?php

        require './app/config.php';

        require './app/shareFolder/header.php';
    ?>
    <hr class="linea">
    <div id="banner">
        <div class="titulo">
            <h1>Sistema de Evaluación de Instructores</h1>
            <p>Herramienta integral para evaluar y potenciar habilidades de nuestros instructores</p>
        </div>
        <section class="section_caja">
            <img src="assets/img/corporativas/InstructorSENA.jpg" alt="Instructor SENA" class="img_caja">
        </section>
    </div>

        <hr class="linea">
        
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
            <button><a href="app/home/iniciarsesion.php">Acceder</a></button>
        </div>
        </section>
    </div>
    <footer>
        <div class="social-buttons">
            <a href="#" target="_blank" class="social-link">
                <i class="fa-brands fa-facebook"></i>
                <span>Facebook</span>
            </a>
            <a href="#" target="_blank" class="social-link">
                <i class="fa-brands fa-twitter"></i>
                <span>Twitter</span>
            </a>
            <a href="#" target="_blank" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        </div>
        <p class="tituloFooter">© 2024 BANIN - SENA. Todos los derechos reservados.</p>
    </footer>

</body>
</html>