<?php
require "header.php";
?>

<main>
    <div class="wrapper_main">
        <section class="section_default">
            <h1>Signup</h1>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == 'emptyfields'){
                        echo '<p>Fill in all fields!</p>';
                    }
                    else if($_GET['error'] == 'invalidmailuid'){
                        echo '<p>Invalid email address and username!</p>';
                    }
                    else if($_GET['error'] == 'invaliduid'){
                        echo '<p>Invalid username!</p>';
                    }
                    else if($_GET['error'] == 'invalidmail'){
                        echo '<p>Invalid email address!</p>';
                    }
                    else if($_GET['error'] == 'passwordcheck'){
                        echo '<p>Passwords do not match!</p>';
                    }
                    else if($_GET['error'] == 'usertaken'){
                        echo '<p>Username taken!</p>';
                    }
                }
            ?>
            <form action="includes/signup.inc.php" class="form_signup" method="POST">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="repeat_pwd" placeholder="Reapeat password">
                <button type="submit" name="signup_submit">SIGNUP</button>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>