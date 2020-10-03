<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php
            $conn = mysqli_connect("localhost", "root", "");

            if (!conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "Connected succesfully";
            }
        ?>
    </body>
    </html>