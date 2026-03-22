<?php

class DashboardController extends Controller {

    public function __construct() {
        // Verificar se o usuário está logado
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index() {
        $this->view('dashboard');
    }
}