<?php
class Author {
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->exec("USE book_db");
    }

    public function getAll(): ?array
    {
        $stm = $this->pdo->query("SELECT * FROM authors");
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneById(int $author_id): ?array
    {
        $stm = $this->pdo->prepare("SELECT * FROM authors WHERE author_id = :author_id");
        $stm->bindValue(":author_id", $author_id, PDO::PARAM_INT);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC); 
    }

    //CRUD

    public function create(string $first_name, ?string $middle_name, ?string $last_name): bool
    {
        $stm = $this->pdo->prepare("INSERT INTO authors (first_name, middle_name, last_name) 
                                    VALUES (:first_name, :middle_name, :last_name)");
        $stm->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $stm->bindValue(":middle_name", $middle_name, PDO::PARAM_STR);
        $stm->bindValue(":last_name", $last_name, PDO::PARAM_STR);
        
        return $stm->execute();
    }

    public function update(int $author_id, string $first_name, ?string $middle_name, ?string $last_name): bool
    {
        $stm = $this->pdo->prepare("UPDATE authors 
                                    SET first_name = :first_name, middle_name = :middle_name, last_name = :last_name 
                                    WHERE author_id = :author_id");
        $stm->bindValue(":author_id", $author_id, PDO::PARAM_INT);
        $stm->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $stm->bindValue(":middle_name", $middle_name, PDO::PARAM_STR);
        $stm->bindValue(":last_name", $last_name, PDO::PARAM_STR);

        return $stm->execute(); 
    }

    public function delete(int $author_id): bool
    {
        $stm = $this->pdo->prepare("DELETE FROM authors WHERE author_id = :author_id");
        $stm->bindValue(":author_id", $author_id, PDO::PARAM_INT);
        
        return $stm->execute();
    }

}
?>