<?php

class DBConnection {
    public static function connect($dbHost, $dbUser, $databaseName, $dbPassword) {
        try {
            $dsn = "mysql:host:$dbHost;dbname=$databaseName;charSet=UTF8";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    
            $pdo = new PDO($dsn, $dbUser, $dbPassword, $options);
        
            return $pdo;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}