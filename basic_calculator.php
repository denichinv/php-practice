
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
 // A simple calculator that uses a function to add two variables with numerical values, and then output the sum of these two values in an HTML format.. 


 function addNumbers(){
    $num1 = 10;
    $num2 = 25;
    $sum = $num1 + $num2;

    echo "<h2>The sum of " . $num1 . " and " . $num2 . " is: " . $sum . "</h2>";
    
 }
 
addNumbers();

?>
</body>
</html>