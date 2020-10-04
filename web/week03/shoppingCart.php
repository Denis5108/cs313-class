<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styler.css">
        </head>
    <body>
        <form action="checkout.php" method="post">
            <label for="username"><input type="text" name="username">Username</label>
            <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>

    <?php
    if (isset($_SESSION['test']) && ! empty($_SESSION['test'])) {
        echo $_SESSION['test'];
    }
      session_destroy();
    ?>