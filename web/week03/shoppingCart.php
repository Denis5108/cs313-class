<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php 
            echo "<ul>";
            $items = array("Button1, Buttoon2, Button3, Button4, Button5");


            forEach($items as $item)
            {
                echo "<li class=\"items\">" . $item . "</li>";
            }
            echo "</ul>";
        ?>
    </body>
    </html>