<?php
class Book {
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->exec("USE book_db");
    }

    public function getAll(): ?array
    {
        $stm = $this->pdo->query("select * from books");
        return $stm->fetchAll();
    }

    public function getOneById(int $id): ?array
    {
        $stm = $this->pdo->prepare("select * from books where book_id = :id");
        $stm->bindValue(":id", $id, PDO::PARAM_INT);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($name, $isbn) {
        $stmt = $this->pdo->prepare("INSERT INTO books (name, isbn) VALUES (:name, :isbn)");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':isbn', $isbn);
        return $stmt->execute();
    }

    public function update($id, $name, $isbn) {
        $stmt = $this->pdo->prepare("UPDATE books SET name = :name, isbn = :isbn WHERE book_id = :id");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':isbn', $isbn);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM books WHERE book_id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>