<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username"> <br>
        <label for="password">Password:</label>
        <input type="password"  name="password"> <br>
       <input type="submit" value="Log in" name="login"><br>

    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username",
     FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    if(empty($username)){
        echo "Please Enter a Username!";
}
elseif(empty($password)){
    echo "Please Enter a Password";
}
else{   
echo"Hello, $username!";
}
}
?>