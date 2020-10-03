<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php
            $servename = "localhost";
            $username  = "root";
            $password  = "";

            $conn = new mysqli($servername, $username, $password, "testdb");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "connected succefully";
            }
        ?>
    </body>
    </html>