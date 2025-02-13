<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="measurements.php" method="get">
        <label>Radius</label>
        <input type="number" name="radius">
        <input type="submit" name="circumference">
    </form><br>
    
</body>
</html>

<?php
 $radius = $_GET["radius"];
 $circumference = null;

 $circumference = round(($radius * pi() *2),2);

 $area = round(pi() * pow($radius,2),2);
 $volume =round( 4/3 * pi() * pow($radius,3),2);

 echo "Circumference = {$circumference}cm <br>";
 echo "Area = {$area}cm^2 <br>";
 echo  "Volume = {$volume}cm^3 <br>";


?>