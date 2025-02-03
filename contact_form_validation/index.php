<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .error { color: red; }
        .success { color: green; }
        form { width: 300px; }
    </style>
</head>
<body>
    <?php
        // $name = "";
        // $email = "";
        // $message = "";
        // $subject = "";
        $name = $email = $subject = $message = "";
        $nameErr = $emailErr = $subjectErr = $messageErr = "";
        $successMsg = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Validate Name
            if (empty(trim($_POST["name"]))) {
                $nameErr = "Name is required.";
            } elseif (strlen($_POST["name"]) < 3) {
                $nameErr = "Name must be at least 3 characters.";
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }

            // Validate Email
            if (empty(trim($_POST["email"]))) {
                $emailErr = "Email is required.";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format.";
            } else {
                $email = htmlspecialchars($_POST["email"]);
            }

            // Validate Subject
            if (empty(trim($_POST["subject"]))) {
                $subjectErr = "Subject is required.";
            } else {
                $subject = htmlspecialchars($_POST["subject"]);
            }

            // Validate Message
            if (empty(trim($_POST["message"]))) {
                $messageErr = "Message cannot be empty.";
            } elseif (strlen($_POST["message"]) < 10) {
                $messageErr = "Message must be at least 10 characters.";
            } else {
                $message = htmlspecialchars($_POST["message"]);
            }

            // If no error happens than we should show a success messages
            if (empty($nameErr) && 
            empty($emailErr) && 
            empty($subjectErr) && 
            empty($messageErr)) {
                $successMsg = "Your message has been successfully send!";
            }
        }
    ?>
    <h2>Contact Us</h2>
    
    <?php
        if(!empty($successMsg)) {
            echo '<p class="success">'. $successMsg .'</p>';
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subjectID" name="subject" value="<?php echo $subject; ?>">
        <span class="error"><?php echo $subjectErr; ?></span><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message">
        <?php echo $message; ?>
        </textarea>
        <span class="error"><?php echo $messageErr; ?></span><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
