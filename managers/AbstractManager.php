<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        
        $dbHost = $_ENV['DB_HOST'];
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];
        $dbName = $_ENV['DB_NAME'];
        
        try {
    $this->db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    // Définir le mode d'erreur PDO à exception
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
    } catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
        
    }
}
