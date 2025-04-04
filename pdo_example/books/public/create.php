<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$book = new Book($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    if ($name && $isbn) {
        $book->create($name, $isbn);
        header("Location: index.php");
        exit;
    }
}
?>
<form method="POST">
    <label>Book Name: <input type="text" name="name" required></label><br>
    <label>ISBN: <input type="text" name="isbn" required></label><br>
    <button type="submit">Add Book</button>
</form>
