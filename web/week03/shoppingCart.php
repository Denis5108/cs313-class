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
 
    <?php

        $image = array();
        $price = array("30", "20", "67", "89", "56", "89", "34", "120", "123");
        echo "<div class=product>";
        echo "<form method=post action=checkout.php>";
        for ($i = 0; $i<=8; $i++)
        {
            echo "<div class=products>";

            echo "<img src='Denis Garley.jpg' />" . "<br>";
            echo "<p>Cost: $$price[i] </p>";
            echo "<input type=text name=txt$i />" . "<br>";
            echo "<input type=submit value='Add to Cart'/>";
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