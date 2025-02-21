<h1>Form Processing</h1>

<?php


if(isset($_GET['name'])){

    $name = $_GET['name'];
    $method = $_SERVER['REQUEST_METHOD'];

    echo "<p> Hello,$name! You submitted this data using $method method. <p>";
}

?>