<?php

namespace SimpleExamples\DesignPatterns\Creational\Singleton\Example;

use Exception;
use PDO;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) self::$instance = new self();
        return self::$instance;
    }

    public function __wakeup()
    {
        throw new Exception(message: "Cannot unserialize Singleton");
    }

    private function __construct() {}

    private function __clone() {}
}

// or

final class DBConnection
{
    private static ?DBConnection $instance = null;
    private $conn;

    private function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=mydb', 'user', 'password');
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DBConnection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    private function __clone()
    {
        // Zabrania klonowania obiektu
    }

    private function __wakeup()
    {
        // Zabrania odbudowywania obiektu z serializacji
    }
}

// Przykład użycia:
$conn = DBConnection::getInstance()->getConnection();
$stmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([1]);
$users = $stmt->fetchAll();