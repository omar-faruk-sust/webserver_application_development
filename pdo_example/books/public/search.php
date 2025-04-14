<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';
require_once '../../config/session_check.php';

$book = new Book(
    DBConnection::connect($host, $user, $dbName, $password)
);

$searchText = $_GET['searchText'] ?? "";
$resultBookList = $book->search($searchText);
foreach($resultBookList as $result) {
    echo '<tr>
            <td>'. $result['book_id']. ' </td>
            <td>'. $result['name'] .'</td>
            <td>'. $result['isbn'] .'</td>
            <td>
                <a href="edit.php?id='. $result['book_id'].'" class="btn btn-primary btn-sm">Edit</a>
                <a href="edit.php?id='. $result['book_id'].'" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>';
}
?>