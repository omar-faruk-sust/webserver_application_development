<?php
class Author {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->pdo->exec("USE book_db");
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM authors ORDER BY author_id ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM authors WHERE author_id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($first, $middle, $last, $photo) {
        $stmt = $this->pdo->prepare("INSERT INTO authors (first_name, middle_name, last_name, photo) VALUES (:first, :middle, :last, :photo)");
        $stmt->bindValue(':first', $first);
        $stmt->bindValue(':middle', $middle);
        $stmt->bindValue(':last', $last);
        $stmt->bindValue(':photo', $photo);
        return $stmt->execute();
    }

    public function update($id, $first, $middle, $last) {
        $stmt = $this->pdo->prepare("UPDATE authors SET first_name = :first, middle_name = :middle, last_name = :last WHERE author_id = :id");
        $stmt->bindValue(':first', $first);
        $stmt->bindValue(':middle', $middle);
        $stmt->bindValue(':last', $last);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM authors WHERE author_id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
