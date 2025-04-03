<?php

require_once '../models/Book.php';
require_once '../models/Author.php';

$book = new Book();
$author = new Author();

$authors = $author->getAuthors();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author_id = $_POST['author_id'];
    
    if ($book->createBook($title, $author_id)) {
        echo "Book added successfully!";
    } else {
        echo "Error adding book.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h2>Add a New Book</h2>
    <form method="post">
        <label>Title:</label>
        <input type="text" name="title" required><br>
        <label>Author:</label>
        <select name="author_id" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id']; ?>"><?= $author['name']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>
