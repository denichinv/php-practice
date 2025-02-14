<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="choice.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">
    Pizza <br>
    <input type="checkbox" name="hamburger" value="Hamburger">
    Hamburger <br>
    <input type="checkbox" name="hotdog" value="Hotdog">
    Hotdog <br>
    <input type="checkbox" name="taco" value="Taco">
    Taco <br>
<input type="submit" name="select" value="Select">
</form>
    
</body>
</html>

<?php

if(isset($_POST ["select"])){

    if(isset($_POST["pizza"])){
        echo "You like Pizza! <br>";
    }
    if(isset($_POST["hamburger"])){
        echo "You like Hamburgers! <br>";
    }
    if(isset($_POST["hotdog"])){
        echo "You like Hotdog! <br>";
    }
    if(isset($_POST["Taco"])){
        echo "You like Tacos! <br>";
    }

    if(empty($_POST["pizza"])){
        echo "You DON'T like Pizza! <br>";
    }
    if(empty($_POST["hamburger"])){
        echo "You DON'T like Hamburgers! <br>";
    }
    if(empty($_POST["hotdog"])){
        echo "You DON'T like Hotdog! <br>";
    }
    if(empty($_POST["Taco"])){
        echo "You DON'T like Tacos! <br>";
    }

}



?>