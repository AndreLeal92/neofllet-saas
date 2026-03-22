<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'and28477_neofleet'; // Certifique-se de que o nome do banco de dados está correto
    private $username = 'and28477_neofleet_user'; // Nome do usuário MySQL
    private $password = 'W)?Ey=~hel.0efK5P$'; // Nova senha
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }
        return $this->conn;
    }
}