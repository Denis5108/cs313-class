<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>

        <?php 
            $items = array("Button");
            forEach($items as $item)
            {
                echo "<div class=\"items\">" . $item . "</div>";
            }
        ?>
    </body>
    </html>