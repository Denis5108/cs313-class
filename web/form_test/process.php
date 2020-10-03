<?php
   
    // connect to the database
   $conn =  mysqli_connect("localhost", "root", "", "testdb");


    // query the database for user
    $sql = "SELECT customerID, firstName, lastname FROM customers";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // check data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "customerID: " . $row["customerID"] . " firstName: " . $row["firstName"] . " - lastName: " . $row["lastName"];
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?>