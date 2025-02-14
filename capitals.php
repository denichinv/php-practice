
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="capitals.php" method="post">
        <input type="text" placeholder="Enter Country" name="country">
        <input type="submit">
    </form>
</body>
</html>






<?php
$countries = array("Bulgaria" => "Sofia",
                    "Turkey" => "Ankara ",
                    "Romania" => "Bucharest",
                    "Macedonia"=>"Skopje",
                    "Kosovo"=>"Pristina",
                    "Greece"=>"Athens",
                    "Serbia" => "Beograd",
                    "USA"=> "Washington D.C.",
                    "Japan"=>  "Kyoto",
                    "South Korea"=> "Seoul",
                    "India"=>  "New Delhi"
                    ) ;


$capital = $countries[$_POST["country"]];

echo "The capital is $capital.";
?>