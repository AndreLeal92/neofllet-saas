<?php

// Definindo a URL do aplicativo (base URL)
define('BASE_URL', 'http://neofleet.com.br');  // Altere se necessário

// Configuração do banco de dados MySQL
define('DB_HOST', 'localhost');               // Host do MySQL, geralmente 'localhost'
define('DB_NAME', 'and28477_neofleet');        // Nome do banco de dados
define('DB_USER', 'and28477_neofleet_user');   // Nome do usuário do MySQL
define('DB_PASS', 'M9{l+{QJWftM');           // Substitua por sua senha do MySQL

// Conexão com o banco de dados
try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Outros dados de configuração
define('SITE_NAME', 'NeoFleet');
define('SITE_EMAIL', 'contato@neofleet.com.br');

// Caminho absoluto para o diretório raiz (public_html/neofleet.com.br)
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/neofleet.com.br');

?>