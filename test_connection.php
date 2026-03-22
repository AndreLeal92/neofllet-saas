<?php
// Inclui o arquivo de configuração para a conexão com o banco de dados
require_once 'config.php';  

// Testa a conexão com o banco de dados
try {
    // Tenta uma consulta simples para verificar a conexão
    $stmt = $pdo->query("SELECT 1");
    
    // Se a consulta foi executada sem erros, exibe uma mensagem de sucesso
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    // Se houver algum erro na conexão, exibe a mensagem de erro
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
?>