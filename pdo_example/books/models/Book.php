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

    //CRUD

    public function create(string $title, string $author, int $year, string $genre): bool
    {
        $stm = $this->pdo->prepare("INSERT INTO books (title, author, year, genre) 
                                    VALUES (:title, :author, :year, :genre)");
        $stm->bindValue(":title", $title, PDO::PARAM_STR);
        $stm->bindValue(":author", $author, PDO::PARAM_STR);
        $stm->bindValue(":year", $year, PDO::PARAM_INT);
        $stm->bindValue(":genre", $genre, PDO::PARAM_STR);
        
        return $stm->execute(); 
    }

    public function update(int $book_id, string $title, string $author, int $year, string $genre): bool
    {
        $stm = $this->pdo->prepare("UPDATE books 
                                    SET title = :title, author = :author, year = :year, genre = :genre 
                                    WHERE book_id = :book_id");
        $stm->bindValue(":book_id", $book_id, PDO::PARAM_INT);
        $stm->bindValue(":title", $title, PDO::PARAM_STR);
        $stm->bindValue(":author", $author, PDO::PARAM_STR);
        $stm->bindValue(":year", $year, PDO::PARAM_INT);
        $stm->bindValue(":genre", $genre, PDO::PARAM_STR);

        return $stm->execute();
    }

    public function delete(int $book_id): bool
    {
        $stm = $this->pdo->prepare("DELETE FROM books WHERE book_id = :book_id");
        $stm->bindValue(":book_id", $book_id, PDO::PARAM_INT);
        
        return $stm->execute(); 
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

    /**
     * This function is to search books with name or isbn
     */
    public function search($searchText) {
        $stmt = $this->pdo->prepare(
            "select * from books where `name` like '%".$searchText."%' OR `isbn` like '%".$searchText."%'"
        );
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTheLastBook()
    {
        return $this->pdo->query("SELECT * FROM books ORDER BY book_id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
    }
}
?>