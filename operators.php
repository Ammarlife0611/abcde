<?php include 'includes/header.php'; ?>
<main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h6 class="login-status">You are logged in!</h6>';
                }
                else {
                    echo '<h6 class="login-status">You are logged out!</h6>';
                }
                ?>
            </section>
        </div>
    </main>
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