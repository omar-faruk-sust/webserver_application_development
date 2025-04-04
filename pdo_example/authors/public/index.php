<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);
$authors = $author->getAll();
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
    <h2 class="mb-4">Authors List</h2>
    <a href="create.php" class="btn btn-success mb-3">Add New Author</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Middle</th>
                <th>Last</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($authors as $a): ?>
    <tr>
        <td><?= $a['author_id'] ?></td>
        <td><?= htmlspecialchars($a['first_name']) ?></td>
        <td><?= $a['middle_name']??"" ?></td>
        <td><?= htmlspecialchars($a['last_name']) ?></td>
        <td>
            <a href="edit.php?id=<?= $a['author_id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $a['author_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
    </tbody>
    </table>
</div>
</body>
</html>
