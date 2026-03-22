<?php

class AuthController extends Controller {

    // Construtor para carregar o modelo de usuário
    public function __construct() {
        $this->loadModel('UserModel');
    }

    // Função de login
    public function login() {
        // Quando o formulário for enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $tenant_id = $_POST['tenant_id'];  // Recebe o tenant selecionado
            
            // Verificar se as credenciais são válidas
            if ($this->UserModel->validateUser($username, $password, $tenant_id)) {
                // Se válido, cria sessão de usuário
                $_SESSION['user'] = $username;
                $_SESSION['tenant_id'] = $tenant_id;
                header('Location: /dashboard');  // Redireciona para o dashboard
                exit();
            } else {
                // Se inválido, retorna com erro
                $this->view('login', ['error' => 'Credenciais inválidas']);
            }
        } else {
            // Se o método não for POST, exibe o formulário de login
            $tenants = $this->UserModel->getTenants();
            $this->view('login', ['tenants' => $tenants]);
        }
    }

    // Função de logout
    public function logout() {
        session_start();
        session_destroy(); // Destrói a sessão
        header('Location: /login'); // Redireciona para a tela de login
        exit;
    }
}