<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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