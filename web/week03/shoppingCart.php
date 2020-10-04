<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styler.css">
        </head>
    <body>
 
    <?php

        $images = array("shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg", "shoes.jpg");
        //$name =  array("Jordan 1's",);
        $prices = array("30", "20", "67", "89", "56", "89", "34", "120", "123");
        echo "<div class=product>";
        echo "<form method=post action=<?php echo htmlspecialchars($_SERVER[PHP_SELF]);?>";
        for ($i = 0; $i<=7; $i++)
        {
            echo "<div class=products>";

            echo "<img src=$images[$i] />" . "<br>";
            echo "<p>Cost: $$prices[$i] </p>";
            echo "<p>Name: Jordan 1's</p>";
            echo "<input type=text name=shoe />" . "<br>";
            echo "<input type=submit value='Add to Cart'/>";
            echo "</div>";
        }
        echo "</form>" . "</div>";
    ?>
    </body>
    </html>
    <?php

    $shoe = $_POST["shoe"];
    echo "Your shoes ".$shoe;

    // foreach ($images as $key=>$value)
    // {
    //     echo $value . "<br>";
    // }
    // if (isset($_SESSION['test']) && ! empty($_SESSION['test'])) {
    //     echo $_SESSION['test'];
    // }
    //   session_destroy();
    // ?>