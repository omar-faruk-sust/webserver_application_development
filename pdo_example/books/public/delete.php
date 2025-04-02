<?php

require_once '../models/Book.php';

$book = new Book();

if (isset($_GET['id'])) {
    $book_id = $_GET['id'];

    if ($book->deleteBook($book_id)) {
        echo "Book deleted successfully!";
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting book.";
    }
} else {
    echo "Invalid request.";
}

?>
