<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$data = $author->getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['first_name'] ?? '';
    $middle = $_POST['middle_name'] ?? '';
    $last = $_POST['last_name'] ?? '';
    $author->update($id, $first, $middle, $last);
    header("Location: index.php");
    exit;
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
    <h2 class="mb-4">Author</h2>
    <a href="index.php" class="btn btn-primary mb-3">Author List</a>
<form method="POST">
    <label>First Name: <input type="text" name="first_name" value="<?= htmlspecialchars($data['first_name']) ?>" required></label><br>
    <label>Middle Name: <input type="text" name="middle_name" value="<?= htmlspecialchars($data['middle_name']?? "") ?>"></label><br>
    <label>Last Name: <input type="text" name="last_name" value="<?= htmlspecialchars($data['last_name']) ?>" required></label><br>
    <button class="btn btn-success mb-3" type="submit">Update Author</button>
    </form>
</div>
</body>
</html>
