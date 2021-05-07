<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<body>
    <header>
        <nav class="nav_header_main">
            <a class="header_logo" href="#">
                <img src="./images/logo.png" alt="logo">
            </a>
            <div class="links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portifolio</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="header_login">
            <div class="inputs">
                <form action="./includes/login.inc.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login_submit">Login</button>
                </form>
            </div>
            <div class="buttons">
                <a href="signup.php">Signup</a>
                <form action="./includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout_submit">Logout</button>
                </form>
            </div>
        </div>
    </header>
</body>

</html>