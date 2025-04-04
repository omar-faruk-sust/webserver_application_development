<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);

$id = $_GET['id'] ?? null;
if ($id) {
    $author->delete($id);
}
header("Location: index.php");
exit;
