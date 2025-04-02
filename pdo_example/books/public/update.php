<?php

require_once '../models/Book.php';
require_once '../models/Author.php';

$book = new Book();
$author = new Author();

$authors = $author->getAuthors();

if (isset($_GET['id'])) {
    $book_id = $_GET['id'];
    $book_data = $book->getBooks();
    $current_book = null;

    foreach ($book_data as $b) {
        if ($b['id'] == $book_id) {
            $current_book = $b;
            break;
        }
    }

    if (!$current_book) {
        die("Book not found.");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author_id = $_POST['author_id'];

    if ($book->updateBook($id, $title, $author_id)) {
        echo "Book updated successfully!";
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating book.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Book</title>
</head>
<body>
    <h2>Update Book</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $current_book['id']; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?= $current_book['title']; ?>" required><br>
        <label>Author:</label>
        <select name="author_id" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id']; ?>" <?= ($author['id'] == $current_book['author']) ? 'selected' : ''; ?>>
                    <?= $author['name']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Back to List</a>
</body>
</html>
