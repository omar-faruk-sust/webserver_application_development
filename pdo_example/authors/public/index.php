<?php
    require_once '../../config/db_config.php';
    require_once '../../config/DBConnection.php';
    require_once '../model/Author.php';
    require_once '../../config/session_check.php';

    $pdo = DBConnection::connect($host, $user, $dbName, $password);
    $author = new Author($pdo);
    $authors = $author->getAll();
?>

<?php 
    include("../../template/header.php");
?>

<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Authors List</h2>
    <a href="create.php" class="btn btn-success mb-3">Add New Author</a>
    <a href="../../dashboard.php" class="btn btn-info mb-3">Dashboard</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Middle</th>
                <th>Last</th>
                <th>photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($authors as $a): ?>
    <tr>
        <td><?= $a['author_id'] ?></td>
        <td><?= htmlspecialchars($a['first_name']) ?></td>
        <td><?= $a['middle_name']??"" ?></td>
        <td><?= htmlspecialchars($a['last_name']) ?></td>
        <td>
            <?php if($a['photo']): ?>
                <img src="<?php echo $a['photo']; ?>" width="40", height="40">
            <?php else: ?>    
                No Photo
            <?php endif; ?>
        </td>
        <td>
            <a href="edit.php?id=<?= $a['author_id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $a['author_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
    </tbody>
    </table>
</div>
<?php 
    include("../../template/footer.php");
?>
