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

        $x = 2;

        if ($x ==1) {
            echo "Ammar is very tall!";
        }
        elseif ($x == 2) {
            echo "Ammar is kinda tall";
        }
        elseif ($x == 2) {
            echo "Ammar is kinda funny";
        }
        elseif ($x == 2) {
            echo "Ammar is not short";
        }
        else {
            echo "Ammar is very handsome";
        }
    ?>





    <?php

        $x = 1;

        switch ($x) {
            case 1:
                echo "The answer is 1";
            break;
            case "2":
                echo "The answer is 2";
            break;
            case 3:
                echo "The answer is 3";
            break;
            case 4:
                echo "The answer is 4";
            break;
            default:
                echo "There is no answer";
    
        }
    

    ?>