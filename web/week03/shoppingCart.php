<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "testdb";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT customerID FROM customers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["customerID"];
                }
            }
        ?>
    </body>
    </html>