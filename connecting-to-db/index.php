<?php
include("database.php");
if(isset($_POST["register"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($username) && !empty($password)) {


        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user, passwords) VALUES ('$username', '$hash')";
        
      
        if(mysqli_query($conn, $sql)) {
            echo "User registered successfully!";
        } else {
            echo "Error: " . mysqli_error($conn); 
        }

    } else {
        echo "Please choose a Username/Password before pressing Register!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>REGISTRATION FORM</h1>
<form method="post">
    Create Username: <br>
    <input type="text" name="username" required> <br>
    Create Password: <br>
    <input type="password" name="password" required> <br>
    <input type="submit" value="Register" name="register"><br>
</form>
</body>
</html>
