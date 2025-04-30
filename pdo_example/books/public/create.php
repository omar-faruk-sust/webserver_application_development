<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$book = new Book($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    if ($name && $isbn) {
        $book->create($name, $isbn);
        header("Location: index.php");
        exit;
    }
}
?>

<?php 
    include("../../template/header.php");
?>
<body class="bg-light">
<div class="container">
    <h2 class="mb-4">Add Book</h2>
    <a href="index.php" class="btn btn-success mb-3">Book List</a>
    <form method="POST">
        <div class="mb-3">
            <label for="bookName" class="form-label">Book Name</label>
            <input type="text" class="form-control" id="bookName" placeholder="Enter a book name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="ISBN" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="ISBN" placeholder="ISBN" name="isbn">
        </div>
        
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
</body>
<?php 
    include("../../template/footer.php");
?>
