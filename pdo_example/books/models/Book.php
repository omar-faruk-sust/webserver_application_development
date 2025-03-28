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

    public function getOneByName(int $id): ?array
    {
        $stm = $this->pdo->prepare("select * from books where book_id = :id");
        $stm->bindValue(":id", $id, PDO::PARAM_INT);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>