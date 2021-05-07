<?php
require "header.php";
?>

<main>
    <div class="wrapper_main">
        <section class="section_default">
            <h1>Signup</h1>
            <form action="includes/signup.inc.php" class="form_signup" method="POST">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="amil" placeholder="E-mail">
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