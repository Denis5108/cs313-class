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
            }

            $sql = "SELECT customerID, firstName, lastName FROM customers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["customerID"];
                }
            }
            mysqli_close($conn);
        ?>
    </body>
    </html>