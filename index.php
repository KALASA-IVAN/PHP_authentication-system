<?php
require "header.php";
?>

<main>
    <div class="wrapper_main">
        <div class="login_status">
        <?php
            if(isset($_SESSION['IdUsers'])){
                echo "<p>You are logged in!</p>";
            }
            else{
                echo "<p>You are logged out!</p>";
            }
        ?>
        </div>
    </div>
</main>

<?php
require "footer.php";
?>