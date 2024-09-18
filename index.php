<body>
    <?php
        require './app/config.php';

        require './app/shareFolder/header.php';
    ?>
    <div id="banner">
        <div class="titulo">
            <h1>Sistema de Evaluación de Instructores</h1>
            <p>Herramienta integral para evaluar y potenciar habilidades de nuestros instructores</p>
        </div>
        <section class="section_caja">
            <img src="assets/img/corporativas/InstructorSENA.jpg" alt="Instructor SENA" class="img_caja">
        </section>
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
            <button><a href="app/home/iniciarsesion.php">Acceder</a></button>
        </div>
        </section>
    </div>
    <?php 
    require 'app/shareFolder/footer.php';
    ?>
</body>
</html>