<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="orderPizza.php" method="get">
        <label >Order Quantity:</label><br>
        <input type="number" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php

$item = "pizza";
$price = 4.99;
$quantity = $_GET["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered $quantity $item/s <br>";
echo "Your total is: \$$total";

?>