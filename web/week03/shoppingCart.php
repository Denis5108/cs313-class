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
        echo "<div class=product>";
        echo "<form method=post action=checkout.php>";
        for ($i = 1; $i<=8; $i++)
        {
            echo "<div class=products>";

            echo "<img src='Denis Garley.jpg' />" . "<br>";
            echo "<p>Cost: $$i </p>";
            echo "<input type=text name=txt$i />";
            echo "<input type=submit value=Add to Cart/><br>";
            echo "</div>";
        }
        echo "</form>" . "</div>";
    ?>
    </body>
    </html>

    <?php
    if (isset($_SESSION['test']) && ! empty($_SESSION['test'])) {
        echo $_SESSION['test'];
    }
      session_destroy();
    ?>