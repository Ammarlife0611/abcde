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

echo str_replace("Ammar","Hammudi","Hola Ammar");

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

