<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function isLoggedIn() {
    return isset($_SESSION['id_rol']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: ' . BASE_URL . 'app/home/iniciarsesion.php');
        exit();
    }
}

function requireRole($roles) {
    requireLogin();
    if (!in_array($_SESSION['id_rol'], $roles)) {
        header('Location: ' . BASE_URL . 'app/home/unauthorized.php');
        exit();
    }
}

function requireNotRole($roles) {
    $userRole = $_SESSION['role']; // Asumiendo que el rol del usuario está almacenado en la sesión

    if (in_array($userRole, $roles)) {
        // Si el usuario tiene uno de los roles restringidos, redirigir o mostrar error
        header('Location: ' . BASE_URL . 'index.php'); // Cambiar a la página que desees
        exit();
    }
}
// requireNotRole(['']);