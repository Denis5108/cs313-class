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

        $images = array("shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg");
        //$name =  array("Jordan 1's",);
        $prices = array("30", "20", "67", "89", "56", "89", "34", "120", "123");
        echo "<div class=product>";
        echo "<form method=post action=checkout.php>";
        for ($i = 0; $i<=7; $i++)
        {
            echo "<div class=products>";

            echo "<img src=$images[$i] />" . "<br>";
            echo "<p>Cost: $$prices[$i] </p>";
            echo "<p>Name: Jordan 1's</p>";
            echo "<input type=text name=txt$i />" . "<br>";
            echo "<input type=submit value='Add to Cart'/>";
            echo "</div>";
        }
        echo "</form>" . "</div>";
    ?>
    </body>
    </html>
    <?php

    foreach($images as $key=>$nme)
    {
        if(isset($_POST[$key]))
        {
            echo $nme . "<br>";
        }
    }
    if (isset($_SESSION['test']) && ! empty($_SESSION['test'])) {
        echo $_SESSION['test'];
    }
      session_destroy();
    ?>