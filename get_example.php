<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>
<?php
    
    if(isset($_GET['Submit']) ) {
        $firstName = $_GET['fname'];
        $lastName = $_GET['lname'];

        echo "Your first name is: ". $firstName .", your last name is: ". $lastName;
    }

?>

<form method="GET" name="student_form", action="">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>

  <input type="submit" name="Submit">
</form>

</body>
</html>



