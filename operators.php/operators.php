<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //Arithmetic Operators
    echo 5**5;
?>  

<?php
    //Assignment Operators
    $x = 100;
    $x /= 20;

    echo $x;
?>

<?php
    //Comparison Operators 
    $x = 10;
    $y = 10;

    if ($x <> $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
?>

<?php
    //Increment/Decrement Operators
    $x = 10;
    echo $x--;
    echo $x;
?>  

<?php

    //Logical Operators 
    $x = 10;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

?>



</body>
</html>