<?php
require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../model/Author.php';
require_once '../../config/session_check.php';

$pdo = DBConnection::connect($host, $user, $dbName, $password);
$author = new Author($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['first_name'] ?? '';
    $middle = $_POST['middle_name'] ?? '';
    $last = $_POST['last_name'] ?? '';

    // photo upload handling
    if (isset($_FILES['photo']) && !empty($_FILES['photo'])){
        $file = $_FILES['photo'];
        $fileType = $file['type'];

        if (in_array($fileType, ['image/jgp', 'image/png', 'image/jpeg', 'image/gif'])) {
            $uploads = '../../uploads/';
            if(!file_exists($uploads)) {
                // Create the directory with appropriate read/write permission
                mkdir($uploads, 0777, true);
            }

            $destination = $uploads . basename($file['name']);
            if(move_uploaded_file($file['tmp_name'], $destination)) {
                if ($first && $last) {
                    $author->create($first, $middle, $last, $destination);
                    header("Location: index.php");
                    exit;
                }
            } else {
                echo "<H2> There was an issue on file uploder and we were not able to move the file. </H2>";
            }

        } else {
            echo "<h2> The file type does not supported! </h2>";
        }
    }
}
?>

<?php 
    include("../../template/header.php");
?>
<body class="bg-light">
<div class="container">
    <h2 class="mb-4">Create Author</h2>
    <a href="index.php" class="btn btn-success mb-3">Author List</a>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Jhon" name="first_name" required>
        </div>

        <div class="mb-3">
            <label for="middleName" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middleName" placeholder="Medo" name="middle_name">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Jhon" name="last_name" required>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input class="form-control" type="file" id="formFile" name="photo" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Add Author</button>
    </form>
</div>
</body>
<?php 
    include("../../template/footer.php");
?>
