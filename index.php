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
<form method="GET"> 
    <input type="text" name="person">
    <button>AJ</button>
</form>

<?php
    //This gets something from the database
    function() {}
    /*$name = $_GET['person'];
    echo $name." likes food";*/

?>


</body>
</html>
