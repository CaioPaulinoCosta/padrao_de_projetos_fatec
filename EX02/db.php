<?php

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $host = "localhost";
        $username = "usuario";
        $password = "senha";
        $database = "nome_do_banco";

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            exit;
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

$database = Database::getInstance();
$connection = $database->getConnection();
?>
