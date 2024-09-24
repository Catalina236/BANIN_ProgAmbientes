<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
