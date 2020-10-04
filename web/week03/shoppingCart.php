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
        <!-- <form action="checkout.php" method="post">
            <label for="username"><input type="text" name="username">Username</label>
            <input type="submit" name="submit" value="submit">
    </form> -->

    <?php
        echo "<form method=post action=checkout.php>";
        for ($i = 1; $i<=5; $i++)
        {
            echo "<div class=products>";
            echo "<img src=Denis Garley.jpg />";
            echo "<input type=text name=txt$i />";
            echo "</div>";
        }
        echo "<input type=submit value=Submit />";
        echo "</form>";
    ?>
    </body>
    </html>

    <?php
    if (isset($_SESSION['test']) && ! empty($_SESSION['test'])) {
        echo $_SESSION['test'];
    }
      session_destroy();
    ?>