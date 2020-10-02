<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>

        <?php 
            $items = array("Donut, Pizza, Chicken, Orange Juice, Koby 12's");

            foreach($items as $row) {
                echo "<div><a href=\"shoppingCart.php?page=$row\"";
                if ($row == $page)
                {
                    echo "class=\"items\"";
                }

                echo ">$row</a></div>\n";
            }
        ?>
    </body>
    </html>