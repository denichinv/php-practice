<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="credit_cards.php" method="post">
    <input type="radio" name="credit_card" value="Visa"> 
    Visa <br>
    <input type="radio" name="credit_card" value="Mastercard"> 
    MasterCard <br>
    <input type="radio" name="credit_card" value="American Express"> 
    American Express <br>
    <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){


    if(isset($_POST["credit_card"])){
        
            $creditCard = $_POST["credit_card"];
            echo " You selected $creditCard";
        
    }else{
        echo "Please make a selection!";

    }
}

?>