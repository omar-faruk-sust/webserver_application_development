<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$book = new Book($pdo);

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$bookData = $book->getOneById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    if ($name && $isbn) {
        $book->update($id, $name, $isbn);
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
    <h2 class="mb-4">Edit Book</h2>
    <a href="index.php" class="btn btn-success mb-3">Book List</a>
    <form method="POST">
        <div class="mb-3">
            <label for="bookName" class="form-label">Book Name</label>
            <input type="text" class="form-control" id="bookName" name="name" required value="<?= htmlspecialchars($bookData['name']) ?>">
        </div>

        <div class="mb-3">
            <label for="ISBN" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="ISBN" name="isbn" value="<?= htmlspecialchars($bookData['isbn']) ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Book</button>
    </form>
</div>
</body>
<?php 
    include("../../template/footer.php");
?>