<?php
    session_start();
?>

<?php 
    include("template/header.php");
?>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Hello <?= $_SESSION['username']; ?></h4>
                </div>
                <div class="card-body">
                    <?php echo "You are not in your dashboard!" ?>
                    <a href="books/public/index.php">Book List</a> | 
                    <a href="authors/public/index.php">Author List</a>
                </div>
                <div class="card-footer text-center">
                    <a href="auth/public/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>