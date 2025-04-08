<?php
    session_start();

    require_once '../../config/db_config.php';
    require_once '../../config/DBConnection.php';
    require_once '../model/User.php';

    // Get the User Model and appropriate DB connection
    $pdo = DBConnection::connect($host, $user, $dbName, $password);
    $userModel = new User($pdo);

    $errors = [];
    $form_data = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
    
        $form_data = [
            'username' => $username
        ];

        if (empty($username)) {
            $errors[] = "Username is required.";
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        }

        if (empty($errors)) {
            $user = $userModel->login($username, $password);
            
            if($user) {
                // Login successful
                $_SESSION['success'] = "Login successful!";
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['user_id'];

                // Set the cookie to remeber
                if (isset($_POST['remember'])) {
                    setcookie('remember_user', $user['username'], time() + 86000);
                }

                // Clear form data
                unset($_SESSION['form_data']);
                unset($_SESSION['errors']);

                // Redirect to dashboard page
                header("Location: ../../dashboard.php");
                exit();
            } else {
                $errors[] = "The username or password does not match!";
            } 
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $form_data;
        header("Location: ../public/login.php");
        exit();
    } else {
        header("Location: ../public/login.php");
        exit();
    }
    
?>