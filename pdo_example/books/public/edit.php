<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$book = new Book($pdo);

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$bookData = $book->getOneById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    if ($name && $isbn) {
        $book->update($id, $name, $isbn);
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Books</h2>
    <a href="index.php" class="btn btn-primary mb-3">Book List</a>
<form method="POST">
    <label>Book Name: <input type="text" name="name" value="<?= htmlspecialchars($bookData['name']) ?>" required></label><br>
    <label>ISBN: <input type="text" name="isbn" value="<?= htmlspecialchars($bookData['isbn']) ?>" required></label><br>
    <button class="btn btn-success mb-3" type="submit">Update Book</button>
</form>
</div>
</body>
</html>