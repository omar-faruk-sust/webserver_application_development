<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';
require_once '../../config/session_check.php';

header('Content-Type: application/json');

$book = new Book(
    DBConnection::connect($host, $user, $dbName, $password)
);

$name = $_POST['name'] ?? '';
$isbn = $_POST['isbn'] ?? '';

if (trim($name) === '' || trim($isbn) === '') {
    $reponseArra = [
        "success" => false, 
        "message" => "All fields are required."
    ];
    echo json_encode($reponseArra);
    exit;
}

$book->create($name, $isbn);
$latest = $book->getTheLastBook();
echo json_encode(["success" => true, "book" => $latest]);