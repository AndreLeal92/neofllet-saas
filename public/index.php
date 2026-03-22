<?php
session_start();

// Carregar controladores e modelos
require_once '../app/core/Controller.php';
require_once '../app/models/UserModel.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/DashboardController.php';

// Verificar se a URL corresponde ao controlador de login
if ($_SERVER['REQUEST_URI'] == '/neofleet-saas/login') {
    $controller = new AuthController();
    $controller->login();
} elseif ($_SERVER['REQUEST_URI'] == '/neofleet-saas/logout') {
    $controller = new AuthController();
    $controller->logout();
} elseif ($_SERVER['REQUEST_URI'] == '/neofleet-saas/dashboard') {
    $controller = new DashboardController();
    $controller->index();
} else {
    echo "Página não encontrada.";
}