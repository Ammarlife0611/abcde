<?php include 'includes/header.php'; ?>
    
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

<link rel="stylesheet" href="style.css"> 

</body>
</html>