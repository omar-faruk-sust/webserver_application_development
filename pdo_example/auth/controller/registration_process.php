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
        } else {
            // Check if username already exists in database
            $isUserExist = $userModel->isUsernameExist($username);
            if ($isUserExist) {
                $errors[] = "username already exists.";
            }
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters long.";
        }

        if (empty($errors)) {
            $user = $userModel->register($username, $password);
            
            // Registration successful
            $_SESSION['success'] = "Registration successful! You can now login.";
                
            // Clear form data
            unset($_SESSION['form_data']);
            unset($_SESSION['errors']);

            // Redirect to login page
            header("Location: ../public/register.php");
            exit();
        }

    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $form_data;
        header("Location: ../public/register.php");
        exit();
    } else {
        header("Location: ../public/register.php");
        exit();
    }
    
?>