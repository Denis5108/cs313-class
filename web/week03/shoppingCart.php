<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php 
            $items = array("Button1, Buttoon2, Button3, Button4, Button5");


            foreach($items as $item)
            {
                echo "<div class=\"items\">" . $item . "</div>";
                echo "<br>";
            }
        ?>
    </body>
    </html>