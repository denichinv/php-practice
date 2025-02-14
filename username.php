<?php
// A simple PHP script that outputs the name and age of a user. 
$userName = "John";
$userAge = 32;

if(isset($userName) && isset($userAge)) {
echo "Hello  $userName your age is $userAge !";
}
else { 
    echo "Enter username and age!";
}
?>
