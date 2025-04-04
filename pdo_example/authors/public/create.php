<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['first_name'] ?? '';
    $middle = $_POST['middle_name'] ?? '';
    $last = $_POST['last_name'] ?? '';
    if ($first && $last) {
        $author->create($first, $middle, $last);
        header("Location: index.php");
        exit;
    }
}
?>
<form method="POST">
    <label>First Name: <input type="text" name="first_name" required></label><br>
    <label>Middle Name: <input type="text" name="middle_name"></label><br>
    <label>Last Name: <input type="text" name="last_name" required></label><br>
    <button type="submit">Add Author</button>
</form>
