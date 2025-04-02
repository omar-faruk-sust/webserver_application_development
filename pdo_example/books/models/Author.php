<?php

require_once '../../config/DBConnection.php';

class Author {
    private $conn;

    public function __construct() {
        $this->conn = (new DBConnection())->connect();
    }

    public function createAuthor($name) {
        $query = "INSERT INTO authors (name) VALUES (:name)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    public function getAuthors() {
        $query = "SELECT * FROM authors";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
