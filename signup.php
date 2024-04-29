<?php
    require "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <main>
            <div class="wrapper-main">
                <section class="section-default">
                    <h1>Signup</h1>
                    <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="signuperror">Fill in all fields!</p>';
                            }
                            else if ($_GET['error'] == "invaliduidmail") {
                                echo '<p class="signuperror">Invalid username and e-mail!</p>';
                            }
                            else if ($_GET['error'] == "invaliduid") {
                                echo '<p class="signuperror">Invalid username!</p>';
                            }
                            else if ($_GET['error'] == "invalidmail") {
                                echo '<p class="signuperror">Invald e-mail!</p>';
                            }
                            else if ($_GET['error'] == "passwordcheck") {
                                echo '<p class="signuperror">Your passwords do not match!</p>';
                            }
                            else if ($_GET['error'] == "usertaken") {
                                echo '<p class="signuperror">Username is already taken!</p>';
                            }
                        }
                        else if (isset($_GET['signup'])) {
                            echo '<p class="signupsuccess">Signup successfull!</p>';
                        }
                    ?>
                    <form action="includes/signup.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="text" name="mail" placeholder="E-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <input type="password" name="pwd-repeat" placeholder="Repeat password">
                        <button type="submit" name="signup-submit">Signup</button>
                    </form>
                </section>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

    