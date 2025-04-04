<?php

require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';


$book = new Book(
    DBConnection::connect($host, $user, $dbName, $password)
);
$books = $book->getAll();

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
    <a href="create.php" class="btn btn-success mb-3">Add New Book</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Name</th><th>ISBN</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $mBook): ?>
            <tr>
                <td><?= $mBook['book_id']; ?></td>
                <td><?= $mBook['name']; ?></td>
                <td><?= $mBook['isbn']; ?></td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
