<?php

require_once '../../config/DBConnection.php';

class Book {
    private $conn;

    public function __construct() {
        $this->conn = (new DBConnection())->connect();
    }

    public function createBook($title, $author_id) {
        $query = "INSERT INTO books (title, author_id) VALUES (:title, :author_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author_id', $author_id);
        return $stmt->execute();
    }

    public function getBooks() {
        $query = "SELECT books.id, books.title, authors.name AS author FROM books JOIN authors ON books.author_id = authors.id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateBook($id, $title, $author_id) {
        $query = "UPDATE books SET title = :title, author_id = :author_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author_id', $author_id);
        return $stmt->execute();
    }

    public function deleteBook($id) {
        $query = "DELETE FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

?>
