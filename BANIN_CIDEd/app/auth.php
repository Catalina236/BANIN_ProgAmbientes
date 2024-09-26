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