<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$data = $author->getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['first_name'] ?? '';
    $middle = $_POST['middle_name'] ?? '';
    $last = $_POST['last_name'] ?? '';
    $author->update($id, $first, $middle, $last);
    header("Location: index.php");
    exit;
}
?>


<?php 
    include("../../template/header.php");
?>
<body class="bg-light">
<div class="container">
    <h2 class="mb-4">Edit Author</h2>
    <a href="index.php" class="btn btn-success mb-3">Author List</a>

    <form method="POST">
  
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" value="<?= htmlspecialchars($data['first_name']) ?>" name="first_name" required>
        </div>

        <div class="mb-3">
            <label for="middleName" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middleName" value="<?= htmlspecialchars($data['middle_name']?? "") ?>" name="middle_name">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" value="<?= htmlspecialchars($data['last_name']?? "") ?>" name="last_name" required>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input class="form-control" type="file" id="formFile" name="photo" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Author</button>
    </form>
</div>
</body>
<?php 
    include("../../template/footer.php");
?>

