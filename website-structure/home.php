<?php
session_start();
if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
}
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is my Home Page</h3>

    <p>Home page content will go here ...</p>
    <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>
<?php
include("footer.html");

?>