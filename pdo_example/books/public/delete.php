<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$book = new Book($pdo);

$id = $_GET['id'] ?? null;
if ($id) {
    $book->delete($id);
}
header("Location: index.php");
exit;
